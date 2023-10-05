function _toggle_profile_pix_div() {
  $(".toggle-profile-div").toggle("slow");
}

function select_search() {
  $(".srch-select").toggle("fast");
}
function srch_custom(text) {
  $("#srch-text").html(text);
  $(".custom-srch-div").fadeIn(500);
}
function _next_page(next_id, icon, divid) {
  $("#account_settings_id,#account_detail,#channge_password").hide();
  $("#" + next_id).fadeIn(1000);
  $("#panel-title").html($("#" + icon).html() + $("#" + divid).html());
}
function _prev_page(next_id) {
  $("#account_settings_id,#account_detail,#channge_password").hide();
  $("#" + next_id).fadeIn(1000);
  $("#panel-title").html(
    '<i class="bi-gear"></i> </span id="app_text"> APP SETTINGS'
  );
}

function _alert_close() {
  $("#get-more-div").fadeOut(300);
}

function _collapse(div_id,div_id1,div_id2) {
  var x = document.getElementById(div_id + "num");
  if (x.innerHTML === '&nbsp;<i class="bi-plus"></i>&nbsp;') {
    x.innerHTML = '&nbsp;<i class="bi-dash"></i>&nbsp;';
    //$('#'+div_id).addClass('active-faq');
    _get_fetch_sub_topic(div_id,div_id1,div_id2);
  } else {
    x.innerHTML = '&nbsp;<i class="bi-plus"></i>&nbsp;';
    //  $('#'+div_id).removeClass('active-faq');
  }
  $("#" + div_id + "answer").slideToggle("slow");
}

///// accept number ////
function isNumber_Check() {
  var e = window.event;
  var key = e.keyCode && e.which;

  if (!((key >= 48 && key <= 57) || key == 43 || key == 45)) {
    if (e.preventDefault) {
      e.preventDefault();
      $("#mobile_info").fadeIn(300);
      document.getElementById("reg_mobile", "updt_mobile", "subscription_price").style.border =
        "#F00 1px solid";
    } else {
      e.returnValue = false;
    }
  } else {
    $("#mobile_info").fadeOut(300);
    document.getElementById("reg_mobile", "updt_mobile", "subscription_price").style.border =
      "rgba(0, 0, 0, .1) 1px solid";
  }
}

function _get_active_link(divid) {
  $("#dashboard, #admin, #user, #exam, #subject, #blogs, #faqs").removeClass(
    "active-li"
  );
  $("#" + divid).addClass("active-li");
  $("#_" + divid).addClass("active-li");
  $("#page-title").html($("#_" + divid).html());
}

function _get_page(page, ids, divid, other_ids, other_ids1) {
  _get_active_link(divid);
  $("#page-content")
    .html(
      '<div class="ajax-loader"><img src="' +
        website_url +
        '/all-images/images/ajax-loader.gif"/></div>'
    )
    .fadeIn("fast");
  var action = "get_page";
  var dataString = "action=" + action + "&page=" + page + "&ids=" + ids + "&other_ids=" + other_ids + "&other_ids1=" + other_ids1;
  $.ajax({
    type: "POST",
    url: admin_local_portal_url,
    data: dataString,
    cache: false,
    success: function (html) {
      $("#page-content").html(html);
    },
  });
}

function _get_form(page) {
  $("#get-more-div")
    .html(
      '<div class="ajax-loader"><img src="' +
        website_url +
        '/all-images/images/ajax-loader.gif"/></div>'
    )
    .fadeIn("fast");
  var action = "get_form";
  var dataString = "action=" + action + "&page=" + page;
  $.ajax({
    type: "POST",
    url: admin_local_portal_url,
    data: dataString,
    cache: false,
    success: function (html) {
      $("#get-more-div").html(html);
    },
  });
}

function _get_form_with_id(page, ids, other_ids, other_ids1) {
  $("#get-more-div").html('<div class="ajax-loader"><img src="'+website_url+'/all-images/images/ajax-loader.gif"/></div>').fadeIn(500);
  var action = "get_form_with_id";
  var dataString = "action=" + action + "&page=" + page + "&ids=" + ids + "&other_ids=" + other_ids + "&other_ids1=" + other_ids1;
  $.ajax({
    type: "POST",
    url: admin_local_portal_url,
    data: dataString,
    cache: false,
    success: function (html) {
      $("#get-more-div").html(html);
    },
  });
}

$(function () {
  exam_pix = {
    UpdatePreview: function (obj) {
      // if IE < 10 doesn't support FileReader
      if (!window.FileReader) {
        // don't know how to proceed to assign src to image tag
      } else {
        var reader = new FileReader();
        var target = null;

        reader.onload = function (e) {
          target = e.target || e.srcElement;
          $("#exam-pix").prop("src", target.result);
        };
        reader.readAsDataURL(obj.files[0]);
      }
    },
  };
});



// VIDEO SCRIPT //
function showVideo(video) {
  if (video.files[0]){
      var reader = new FileReader();

      reader.onload = function(video) {
          document.querySelector('#videoDisplay').setAttribute('src', video.target.result);
      }
      reader.readAsDataURL(video.files[0]);
  }
}








function _get_staff_login(staff_id) {
  var action = "fetch_staff_api";
  $("#login_user_fullname,#login_user_login_time").html("XXXXX");
  var dataString = "action=" + action + "&staff_id=" + staff_id;
  $.ajax({
    type: "POST",
    url: api,
    data: dataString,
    dataType: "json",
    cache: false,
    success: function (info) {
      var fetch = info.data;
      var fullname = fetch.fullname.toUpperCase();
      var mobile = fetch.mobile;
      var role_name = fetch.role_name;
      var updated_time = fetch.updated_time;
      var passport = fetch.passport;
      $("#login_user_fullname,#profile_name,#header_profile_name").html(
        fullname
      );
      $("#user_id").html(staff_id);
      $("#header_role_name").html(role_name);
      $("#user_mobile").html(mobile);
      $("#login_user_login_time").html(updated_time);
      _get_header_pix(passport);
    },
  });
}



function _get_header_pix(passport) {
  var header_pix = "";
  if (passport == "") {
    header_pix =
      '<img src="' +
      website_url +
      '/uploaded_files/staff_pix/friends.png" id="passportimg1" alt="profile picture" />' +
      '<img src="' +
      website_url +
      '/uploaded_files/staff_pix/friends.png" id="passportimg2" alt="profile picture" />';
  } else {
    header_pix =
      '<img src="' +
      website_url +
      "/uploaded_files/staff_pix/" +
      passport +
      '" id="passportimg1" alt="profile picture" />';
    '<img src="' +
      website_url +
      "/uploaded_files/staff_pix/" +
      passport +
      '" id="passportimg2" alt="profile picture" />';
  }
  $("#header_pix,#toggle_header_pix").html(header_pix);
}



function _get_select_status(select_id, status_id) {
  var action = "fetch_status_api";
  var dataString = "action=" + action + "&status_id=" + status_id;
  $.ajax({
    type: "POST",
    url: api,
    data: dataString,
    dataType: "json",
    cache: false,
    success: function (info) {
      var result = info.result;
      var message = info.message;
      var fetch = info.data;
      var text = "";

      if (result == true) {
        for (var i = 0; i < fetch.length; i++) {
          var status_id = fetch[i].status_id;
          var status_name = fetch[i].status_name;
          /// for status update profile loop option ////
          text +=
            '<option value="' +
            status_id +
            '" >' +
            status_name.toUpperCase() +
            "</option>";
        }
      } else {
        text = "<option>" + message + "</option>";
      }
      $("#" + select_id).append(text);
    },
  });
}



function _get_select_video_pricing(select_id) {
  var action = "fetch_subscription_pricing_api";
  var dataString = "action=" + action;
  $.ajax({
    type: "POST",
    url: api,
    data: dataString,
    dataType: "json",
    cache: false,
    success: function (info) {
      var result = info.result;
      var message = info.message;
      var fetch = info.data;
      var text = "";

      if (result == true) {
        for (var i = 0; i < fetch.length; i++) {
          var subscription_pricing_id = fetch[i].subscription_pricing_id;
          var subscription_pricing_name = fetch[i].subscription_pricing_name;
          /// for subscription duration update profile loop option ////
          text +=
            '<option value="' + subscription_pricing_id +'" >' + subscription_pricing_name.toUpperCase() + "</option>";
        }
      } else {
        text = "<option>" + message + "</option>";
      }
      $("#" + select_id).append(text);
    },
  });
}




function _get_select_role(select_id, role_id) {
  var action = "fetch_role_api";

  var dataString = "action=" + action + "&role_id=" + role_id;
  $.ajax({
    type: "POST",
    url: api,
    dataType: "json",
    data: dataString,
    cache: false,
    success: function (info) {
      var result = info.result;
      var message = info.message;
      var fetch = info.data;
      var text = "";

      if (result == true) {
        for (var i = 0; i < fetch.length; i++) {
          var role_id = fetch[i].role_id;
          var role_name = fetch[i].role_name;
          /// for role update profile loop option ////
          text +=
            '<option value="' +
            role_id +
            '">' +
            role_name.toUpperCase() +
            "</option>";
        }
      } else {
        text = '<option value="" >' + message + " </option>";
      }
      $("#" + select_id).append(text);
    },
  });
}




function _get_select_duration(select_id) {
  var action = "fetch_duration_api";
  var dataString = "action=" + action ;
  $.ajax({
    type: "POST",
    url: api,
    data: dataString,
    dataType: "json",
    cache: false,
    success: function (info) {
      var result = info.result;
      var message = info.message;
      var fetch = info.data;
      var text = "";

      if (result == true) {
        for (var i = 0; i < fetch.length; i++) {
          var subscription_duration_id = fetch[i].subscription_duration_id;
          /// for status update profile loop option ////
          text +=
            '<option value="' +
            subscription_duration_id +
            '" >' +
            subscription_duration_id +
            "</option>";
        }
      } else {
        text = "<option>" + message + "</option>";
      }
      $("#" + select_id).append(text);
    },
  });
}





function _get_select_video_volume(select_id) {
  var action = "fetch_video_volume_api";
  var dataString = "action=" + action ;
  $.ajax({
    type: "POST",
    url: api,
    data: dataString,
    dataType: "json",
    cache: false,
    success: function (info) {
      var result = info.result;
      var message = info.message;
      var fetch = info.data;
      var text = "";

      if (result == true) {
        for (var i = 0; i < fetch.length; i++) {
          var video_volume_id = fetch[i].video_volume_id;
          var video_volume_name = fetch[i].video_volume_name;
          /// for status update profile loop option ////
          text +=
            '<option value="' +
            video_volume_id +
            '" >' +
            video_volume_name +
            "</option>";
        }
      } else {
        text = "<option>" + message + "</option>";
      }
      $("#" + select_id).append(text);
    },
  });
}




function _get_faq_cat(select_id) {
  var action = "fetch_faq_cat_api";
  var dataString = "action=" + action;
  $.ajax({
    type: "POST",
    url: api,
    data: dataString,
    dataType: "json",
    cache: false,
    success: function (info) {
      var result = info.result;
      var message = info.message;
      var fetch = info.data;
      var text = "";

      if (result == true) {
        for (var i = 0; i < fetch.length; i++) {
          var cat_id = fetch[i].cat_id;
          var cat_desc = fetch[i].cat_desc;
          /// for status update profile loop option ////
          text +=
            '<option value="' +
            cat_id +
            '" >' +
            cat_desc +
            "</option>";
        }
      } else {
        text += "<option>" + message + "</option>";
      }
      $("#" + select_id).append(text);
    },
  });
}





function _add_staff(staff_id) {
  var action = "add_or_update_staff_api";

  var fullname = $("#reg_fullname").val();
  var email = $("#reg_email").val();
  var mobile = $("#reg_mobile").val();
  var address = $("#reg_address").val();
  var role_id = $("#reg_role_id").val();
  var status_id = $("#reg_status_id").val();

  $(
    "#reg_fullname, #reg_email, #reg_mobile, #reg_address, #reg_role_id, #reg_status_id"
  ).removeClass("complain");

  if (fullname == "") {
    $("#reg_fullname").addClass("complain");
    $("#warning-div")
      .html(
        '<div><i class="bi-exclamation-triangle"></i></div> FULLNAME ERROR!<br /><span>Fill Fields To Continue</span>'
      )
      .fadeIn(500)
      .delay(3000)
      .fadeOut(100);
  } else if (email == "" || $("#reg_email").val().indexOf("@") <= 0) {
    $("#reg_email").addClass("complain");
    $("#warning-div")
      .html(
        '<div><i class="bi-exclamation-triangle"></i></div> EMAIL ERROR!<br /><span>Fill Correct Email To Continue</span>'
      )
      .fadeIn(500)
      .delay(3000)
      .fadeOut(100);
  } else if (mobile == "") {
    $("#reg_mobile").addClass("complain");
    $("#warning-div")
      .html(
        '<div><i class="bi-exclamation-triangle"></i></div> MOBILE ERROR!<br /><span>Fill Fields To Continue</span>'
      )
      .fadeIn(500)
      .delay(3000)
      .fadeOut(100);
  } else if (address == "") {
    $("#reg_address").addClass("complain");
    $("#warning-div")
      .html(
        '<div><i class="bi-exclamation-triangle"></i></div> ADDRESS ERROR!<br /><span>Fill Fields To Continue</span>'
      )
      .fadeIn(500)
      .delay(3000)
      .fadeOut(100);
  } else if (role_id == "") {
    $("#reg_role_id").addClass("complain");
    $("#warning-div")
      .html(
        '<div><i class="bi-exclamation-triangle"></i></div> ROLE NAME ERROR!<br /><span>Fill Fields To Continue</span>'
      )
      .fadeIn(500)
      .delay(3000)
      .fadeOut(100);
  } else if (status_id == "") {
    $("#reg_status_id").addClass("complain");
    $("#warning-div")
      .html(
        '<div><i class="bi-exclamation-triangle"></i></div> STATUS NAME ERROR!<br /><span>Fill Fields To Continue</span>'
      )
      .fadeIn(500)
      .delay(3000)
      .fadeOut(100);
  } else {
    $(
      "#reg_fullname, #reg_email, #reg_mobile, #reg_address, #reg_role_id, #reg_status_id"
    ).removeClass("complain");

    var btn_text = $("#submit_btn").html();
    $("#submit_btn").html(
      '<i class="fa fa-spinner fa-spin"></i> PROCESSING...'
    );
    document.getElementById("submit_btn").disabled = true;

    var dataString =
      "action=" +
      action +
      "&staff_id=" +
      staff_id +
      "&fullname=" +
      fullname +
      "&email=" +
      email +
      "&mobile=" +
      mobile +
      "&address=" +
      address +
      "&role_id=" +
      role_id +
      "&status_id=" +
      status_id;
    $.ajax({
      type: "POST",
      url: api,
      dataType: "json",
      data: dataString,
      cache: false,
      success: function (info) {
        var result = info.result;
        var message1 = info.message1;
        var message2 = info.message2;
        if (result == true) {
          $("#success-div")
            .html(
              '<div><i class="bi-check"></i></div> ' +
                message1 +
                " <br> " +
                message2 +
                " "
            )
            .fadeIn(500)
            .delay(5000)
            .fadeOut(100);
          _alert_close();
          _get_page('view_staff', '', 'admin', '','');
        } else {
          $("#reg_email").addClass("complain");
          $("#warning-div")
            .html(
              '<div><i class="bi-check"></i></div> ' +
                message1 +
                " <br> " +
                message2 +
                " "
            )
            .fadeIn(500)
            .delay(3000)
            .fadeOut(100);
        }
        $("#submit_btn").html(btn_text);
        document.getElementById("submit_btn").disabled = false;
      },
    });
  }
}






function _get_fetch_all_staff() {
  var action = "fetch_staff_api";
  var search_txt = $("#search_txt").val();
  var status_id = $("#status_id").val();
  if (search_txt.length > 2 || search_txt == "") {
    var dataString =
      "action=" +
      action +
      "&status_id=" +
      status_id +
      "&search_txt=" +
      search_txt;
    $.ajax({
      type: "POST",
      url: api,
      data: dataString,
      dataType: "json",
      cache: false,
      success: function (info) {
        var fetch = info.data;
        var result = info.result;
        var message = info.message;

        var text = "";

        if (result == true) {
          for (var i = 0; i < fetch.length; i++) {
            var staff_id = fetch[i].staff_id;
            var fullname = fetch[i].fullname;
            var mobile = fetch[i].mobile;
            var status_name = fetch[i].status_name;
            var passport = fetch[i].passport;

            text +=
              '<div class="user-div animated fadeIn" title="View Profile" onclick="_get_form_with_id(' +
              "'staff_profile'" +
              "," +
              "'" +
              staff_id +
              "'" +
              ')">' +
              '<div class="pix-div"><img src="' +
              website_url +
              "/uploaded_files/staff_pix/" +
              passport +
              '"/></div>' +
              '<div class="detail">' +
              '<div class="name-div"><div class="name">' +
              fullname.toUpperCase() +
              "</div><hr /><br/></div>" +
              '<div class="text">ID:' +
              staff_id +
              "</div>" +
              '<div class="text">' +
              mobile +
              "</div>" +
              '<div class="status-div '+ status_name +'">' +
              status_name +
              "</div>" +
              "</div>" +
              '<br clear="all"/>' +
              "</div>";

            $("#fetch").html(text);
          }
        } else {
          text +=
            '<div class="false-notification-div">' +
            "<p> " +
            message +
            " </p>" +
            '<button class="btn" onclick="_get_form(' +
            "'staff_reg'" +
            ')"><i class="bi-person-plus"></i>ADD NEW ADMIN/STAFF</button>' +
            "</div>";
          $("#fetch").html(text);
        }
      },
    });
  } else {
    text +=
      '<div class="false-notification-div">' +
      "<p> " +
      message1 +
      " </p>" +
      '<button class="btn" onclick="_get_form(' +
      "'staff_reg'" +
      ')"><i class="bi-person-plus"></i>ADD NEW ADMIN/STAFF</button>' +
      "</div>";
    $("#fetch").html(text);
  }
}





function _get_staff_profile(staff_id) {
  var action = "fetch_staff_api";
  var dataString = "action=" + action + "&staff_id=" + staff_id;
  $.ajax({
    type: "POST",
    url: api,
    data: dataString,
    dataType: "json",
    cache: false,
    success: function (info) {
      var result = info.result;

      if (result == true) {
        var data = info.data;
        var fullname = data.fullname;
        var mobile = data.mobile;
        var email = data.email;
        var address = data.address;
        var passport = data.passport;
        if (passport == "") {
          passport = "friends.png";
        }

        var role_id = data.role_id;
        var role_name = data.role_name;
        var status_id = data.status_id;
        var status_name = data.status_name;
        var created_time = data.created_time;
        var last_login = data.last_login;

        $("#staff_login_fullname").html(fullname);
        $("#staff_last_login").html(last_login);
        $("#staff_status_name").html(status_name);
        $("#current_user_passport1").html(
          '<img src="' +
            website_url +
            "/uploaded_files/staff_pix/" +
            passport +
            '" id="passportimg4" alt="profile picture"/>'
        );
        $("#current_user_passport2").html(
          '<img src="' +
            website_url +
            "/uploaded_files/staff_pix/" +
            passport +
            '" id="passportimg3" alt="profile picture"/>'
        );

        $("#updt_fullname").val(fullname);
        $("#updt_mobile").val(mobile);
        $("#updt_email").val(email);
        $("#updt_address").val(address);
        $("#updt_status_id").append(
          '<option value="' +
            status_id +
            '" selected="selected">' +
            status_name +
            "</option>"
        );
        $("#updt_role_id").append(
          '<option value="' +
            role_id +
            '" selected="selected">' +
            role_name +
            "</option>"
        );
        $("#staff_id").val(staff_id);
        $("#created_time").val(created_time);
        $("#last_login").val(last_login);
      }
    },
  });
}





function _update_staff_profile(staff_id) {
  var fullname = $("#updt_fullname").val();
  var email = $("#updt_email").val();
  var mobile = $("#updt_mobile").val();
  var address = $("#updt_address").val();
  var role_id = $("#updt_role_id").val();
  var status_id = $("#updt_status_id").val();

  $(
    "#updt_fullname, #updt_email, #updt_mobile, #updt_address, #updt_role_id, #updt_status_id"
  ).removeClass("complain");

  if (fullname == "") {
    $("#updt_fullname").addClass("complain");
    $("#warning-div")
      .html(
        '<div><i class="bi-exclamation-triangle"></i></div> FULLNAME ERROR!<br /><span>Fill Fields To Continue</span>'
      )
      .fadeIn(500)
      .delay(3000)
      .fadeOut(100);
  } else if (email == "" || $("#updt_email").val().indexOf("@") <= 0) {
    $("#updt_email").addClass("complain");
    $("#warning-div")
      .html(
        '<div><i class="bi-exclamation-triangle"></i></div> EMAIL ERROR!<br /><span>Fill Fields To Continue</span>'
      )
      .fadeIn(500)
      .delay(3000)
      .fadeOut(100);
  } else if (mobile == "") {
    $("#updt_mobile").addClass("complain");
    $("#warning-div")
      .html(
        '<div><i class="bi-exclamation-triangle"></i></div> MOBILE ERROR!<br /><span>Fill Fields To Continue</span>'
      )
      .fadeIn(500)
      .delay(3000)
      .fadeOut(100);
  } else if (address == "") {
    $("#updt_address").addClass("complain");
    $("#warning-div")
      .html(
        '<div><i class="bi-exclamation-triangle"></i></div> ADDRESS ERROR!<br /><span>Fill Fields To Continue</span>'
      )
      .fadeIn(500)
      .delay(3000)
      .fadeOut(100);
  } else if (role_id == "") {
    $("#updt_role_id").addClass("complain");
    $("#warning-div")
      .html(
        '<div><i class="bi-exclamation-triangle"></i></div> ROLE ERROR!<br /><span>Fill Fields To Continue</span>'
      )
      .fadeIn(500)
      .delay(3000)
      .fadeOut(100);
  } else if (status_id == "") {
    $("#updt_status_id").addClass("complain");
    $("#warning-div")
      .html(
        '<div><i class="bi-exclamation-triangle"></i></div> STATUS ERROR!<br /><span>Fill Fields To Continue</span>'
      )
      .fadeIn(500)
      .delay(3000)
      .fadeOut(100);
  } else {
    $(
      "#updt_fullname, #updt_email, #updt_mobile, #updt_address, #updt_role_id, #updt_status_id"
    ).removeClass("complain");

    if (confirm("Confirm!!\n\n Are you sure to PERFORM THIS ACTION?")) {
      var btn_text = $("#update_btn").html();
      $("#update_btn").html('<i class="fa fa-spinner fa-spin"></i> UPDATING');
      document.getElementById("update_btn").disabled = true;

      var action = "add_or_update_staff_api";
      var form_data = new FormData();
      form_data.append("action", action);
      form_data.append("staff_id", staff_id);
      form_data.append("fullname", fullname);
      form_data.append("email", email);
      form_data.append("mobile", mobile);
      form_data.append("address", address);
      form_data.append("role_id", role_id);
      form_data.append("status_id", status_id);

      $.ajax({
        type: "POST",
        url: api,
        data: form_data,
        dataType: "json",
        contentType: false,
        cache: false,
        processData: false,
        success: function (info) {
          var result = info.result;
          var message1 = info.message1;
          var message2 = info.message2;
          if (result == true) {
            $("#success-div")
              .html(
                '<div><i class="bi-check"></i></div> ' +
                  message1 +
                  " <br> " +
                  message2 +
                  " "
              )
              .fadeIn(500)
              .delay(5000)
              .fadeOut(100);
              _get_page('view_staff', '', 'admin', '','');
          } else {
            $("#updt_email").addClass("complain");
            $("#warning-div")
              .html(
                '<div><i class="bi-exclamation-triangle"></i></div> EMAIL ERROR!<br /><span>Fill Fields To Continue</span>'
              )
              .fadeIn(500)
              .delay(3000)
              .fadeOut(100);
          }
          $("#update_btn").html(btn_text);
          document.getElementById("update_btn").disabled = false;
        },
      });
    }
  }
}





function _upload_pix_(staff_id) {
  $(function () {
    Staff = {
      UpdatePreview: function (obj) {
        // if IE < 10 doesn't support FileReader
        if (!window.FileReader) {
          // don't know how to proceed to assign src to image tag
        } else {
          _upload_profile_pix(staff_id);
          var reader = new FileReader();
          var target = null;

          reader.onload = function (e) {
            target = e.target || e.srcElement;
            $("#passportimg1,#passportimg2,#passportimg3").prop(
              "src",
              target.result
            );
          };
          reader.readAsDataURL(obj.files[0]);
        }
      },
    };
  });
}





function _upload_staff_pix_(staff_id) {
  $(function () {
    Test = {
      UpdatePreview: function (obj) {
        // if IE < 10 doesn't support FileReader
        if (!window.FileReader) {
          // don't know how to proceed to assign src to image tag
        } else {
          _upload_profile_pix(staff_id);
          var reader = new FileReader();
          var target = null;

          reader.onload = function (e) {
            target = e.target || e.srcElement;
            $("#passportimg4").prop("src", target.result);
          };
          reader.readAsDataURL(obj.files[0]);
        }
      },
    };
  });
}




function _upload_profile_pix(staff_id) {
  var action = "get_passport_api";
  if (staff_id == "") {
    // do nothing
  } else {
    var file_data = $("#passport").prop("files")[0];
    if (file_data == "") {
    } else {
      var form_data = new FormData();
      form_data.append("action", action);
      form_data.append("passport", file_data);
      form_data.append("staff_id", staff_id);

      $.ajax({
        url: api,
        type: "POST",
        data: form_data,
        contentType: false,
        cache: false,
        processData: false,
        success: function (data) {
          var db_passport = data.db_passport;
          _unlink_pix_file(staff_id, db_passport);
          //  move_file(db_passport);
        },
      });
    }
  }
}



function _unlink_pix_file(staff_id, db_passport) {
  var action = "unlink_passport";
  var passport_pix = $("#passport").prop("files")[0];

  var form_data = new FormData();
  form_data.append("action", action);
  form_data.append("db_passport", db_passport);
  form_data.append("db_passport", passport_pix);

  $.ajax({
    url: admin_local_portal_url,
    type: "POST",
    data: form_data,
    contentType: false,
    cache: false,
    processData: false,
    success: function (html) {
      _upload_pix_file(staff_id);
    },
  });
}

function _upload_pix_file(staff_id) {
  var action = "upload_passport_api";
  var passport_pix = $("#passport").prop("files")[0];

  var form_data = new FormData();
  form_data.append("action", action);
  form_data.append("staff_id", staff_id);
  form_data.append("passport", passport);
  form_data.append("passport", passport_pix);

  $.ajax({
    url: api,
    type: "POST",
    data: form_data,
    contentType: false,
    cache: false,
    processData: false,
    success: function (data) {
      var message1 = data.message1;
      var message2 = data.message2;
      var passport = data.passport;
      _get_pix(message1, message2, passport);
    },
  });
}



function _get_pix(message1, message2, passport) {
  var action = "upload_pix_file";

  var passport_pix = $("#passport").prop("files")[0];
  var form_data = new FormData();
  form_data.append("action", action);
  form_data.append("passport", passport);
  form_data.append("passport", passport_pix);

  $.ajax({
    url: admin_local_portal_url,
    type: "POST",
    data: form_data,
    contentType: false,
    cache: false,
    processData: false,
    success: function (html) {
      $("#success-div")
        .html(
          '<div><i class="bi-check"></i></div> ' +
            message1 +
            " <br> " +
            message2 +
            " "
        )
        .fadeIn(500)
        .delay(5000)
        .fadeOut(100);
        _get_page('view_staff', '', 'admin', '','');
    },
  });
}



function _get_fetch_all_user() {
  var action = "fetch_user_api";
  var search_txt = $("#search_txt").val();
  var status_id = $("#status_id").val();
  if (search_txt.length > 2 || search_txt == "") {
    var dataString =
      "action=" +
      action +
      "&status_id=" +
      status_id +
      "&search_txt=" +
      search_txt;
    $.ajax({
      type: "POST",
      url: api,
      data: dataString,
      dataType: "json",
      cache: false,
      success: function (info) {
        var fetch = info.data;
        var result = info.result;
        var message = info.message;

        var text = "";

        if (result == true) {
          for (var i = 0; i < fetch.length; i++) {
            var user_id = fetch[i].user_id;
            var fullname = fetch[i].fullname;
            var mobile = fetch[i].mobile;
            var status_name = fetch[i].status_name;
            var passport = fetch[i].passport;

            text +=
              '<div class="user-div animated fadeIn" title="View Profile" onclick="_get_form_with_id(' +
              "'user_profile'" +
              "," +
              "'" +
              user_id +
              "'" +
              ')">' +
              '<div class="pix-div"><img src="' +
              website_url +
              "/uploaded_files/staff_pix/" +
              passport +
              '"/></div>' +
              '<div class="detail">' +
              '<div class="name-div"><div class="name">' +
              fullname.toUpperCase() +
              "</div><hr /><br/></div>" +
              '<div class="text">ID:' +
              user_id +
              "</div>" +
              '<div class="text"> ' +
              mobile +
              " </div>" +
              '<div class="active"> ' +
              status_name +
              " </div>" +
              "</div>" +
              '<br clear="all"/>' +
              "</div>";

            $("#fetch_user").html(text);
          }
        } else {
          text +=
            '<div class="false-notification-div">' +
            "<p> " +
            message +
            " </p>" +
            "</div>";
          $("#fetch_user").html(text);
        }
      },
    });
  } else {
    text +=
      '<div class="false-notification-div">' +
      "<p> " +
      message1 +
      " </p>" +
      '<button class="btn" onclick="_get_form(' +
      "'user_reg'" +
      ')"><i class="bi-person-plus"></i>ADD NEW USER</button>' +
      "</div>";
    $("#fetch_user").html(text);
  }
}





function _get_user_profile(user_id) {
  var action = "fetch_user_api";
  var dataString = "action=" + action + "&user_id=" + user_id;
  $.ajax({
    type: "POST",
    url: api,
    data: dataString,
    dataType: "json",
    cache: false,
    success: function (info) {
      var result = info.result;

      if (result == true) {
        var data = info.data;
        var user_id = data.user_id;
        var fullname = data.fullname.toUpperCase();
        var mobile = data.mobile;
        var email = data.email;
        var address = data.address;
        var passport = data.passport;
        if (passport == "") {
          passport = "friends.png";
        }

        var status_id = data.status_id;
        var status_name = data.status_name;
        var created_time = data.created_time;
        var last_login = data.last_login;

        $("#user_login_fullname").html(fullname);
        $("#user_last_login").html(last_login);
        $("#user_status_name").html(status_name);
        $("#current_user_passport1").html(
          '<img src="' +
            website_url +
            "/uploaded_files/staff_pix/" +
            passport +
            '" id="passportimg4" alt="profile picture"/>'
        );

        $("#updt_fullname").val(fullname);
        $("#updt_mobile").val(mobile);
        $("#updt_email").val(email);
        $("#updt_address").val(address);
        $("#updt_status_id").append(
          '<option value="' +
            status_id +
            '" selected="selected">' +
            status_name +
            "</option>"
        );
        $("#users_id").val(user_id);
        $("#created_time").val(created_time);
        $("#last_login").val(last_login);
      }
    },
  });
}



function _add_and_update_subject(page, subject_id) {
  var subject_name = $("#subject_name").val();
  var subject_url = $("#subject_url").val();
  var seo_keywords = $("#seo_keywords").val();
  var seo_description = $("#seo_description").val();
  var status_id = $("#reg_status_id").val();
  var subject_picture = $("#subject_passport").val();
  var new_subject_pix = $("#subject_passport").prop("files")[0];

  $(
    "#subject_name, #subject_url, #seo_keywords, #seo_description ,#status_id"
  ).removeClass("complain");

  if (subject_name == "") {
    $("#subject_name").addClass("complain");
    $("#warning-div")
      .html(
        '<div><i class="bi-exclamation-triangle"></i></div> SUBJECT NAME ERROR!<br /><span>Check Subject Name And Try Again</span>'
      )
      .fadeIn(500)
      .delay(3000)
      .fadeOut(100);
  } else if (subject_url == "") {
    $("#subject_url").addClass("complain");
    $("#warning-div")
      .html(
        '<div><i class="bi-exclamation-triangle"></i></div> SUBJECT URL ERROR!<br /><span>Check Url And Try Again</span>'
      )
      .fadeIn(500)
      .delay(3000)
      .fadeOut(100);
  } else if (seo_keywords == "") {
    $("#seo_keywords").addClass("complain");
    $("#warning-div")
      .html(
        '<div><i class="bi-exclamation-triangle"></i></div> SEO KEYWORDS ERROR!<br /><span>Check Seo Keywords And Try Again</span>'
      )
      .fadeIn(500)
      .delay(3000)
      .fadeOut(100);
  } else if (seo_description == "") {
    $("#seo_description").addClass("complain");
    $("#warning-div")
      .html(
        '<div><i class="bi-exclamation-triangle"></i></div> SEO DESCRPITION ERROR!<br /><span>Check Seo Description And Try Again</span>'
      )
      .fadeIn(500)
      .delay(3000)
      .fadeOut(100);
  } else if (status_id == "") {
    $("#reg_status_id").addClass("complain");
    $("#warning-div")
      .html(
        '<div><i class="bi-exclamation-triangle"></i></div> STATUS ERROR!<br /><span>Check Status And Try Again <span>'
      )
      .fadeIn(500)
      .delay(3000)
      .fadeOut(100);
  } else {
    $(
      "#subject_name, #subject_url, #seo_keywords, #seo_description, #status_id"
    ).removeClass("complain");

    if (confirm("Confirm!!\n\n Are you sure to PERFORM THIS ACTION?")) {
      var btn_text = $("#submit_btn").html();
      $("#submit_btn").html('<i class="fa fa-spinner fa-spin"></i> PROCESSING');
      document.getElementById("submit_btn").disabled = true;

      var action = "add_or_update_subject_api";

      var form_data = new FormData();
      form_data.append("action", action);
      form_data.append("subject_id", subject_id);
      form_data.append("subject_name", subject_name);
      form_data.append("subject_url", subject_url);
      form_data.append("seo_keywords", seo_keywords);
      form_data.append("seo_description", seo_description);
      form_data.append("status_id", status_id);
      form_data.append("subject_picture", subject_picture);
      form_data.append("subject_picture", new_subject_pix);

      $.ajax({
        type: "POST",
        url: api,
        data: form_data,
        dataType: "json",
        contentType: false,
        cache: false,
        processData: false,
        success: function (info) {
          var result = info.result;
          var message1 = info.message1;
          var message2 = info.message2;

          if (result == true) {
            var old_passport = info.old_passport;
            var subject_picture = info.subject_picture;

            if (subject_picture != "") {
              _upload_pix(
                page,
                message1,
                message2,
                subject_picture,
                "",
                old_passport
              );
            } else {
              $("#success-div")
                .html(
                  '<div><i class="bi-check"></i></div> ' +
                    message1 +
                    " <br> " +
                    message2 +
                    " "
                )
                .fadeIn(500)
                .delay(5000)
                .fadeOut(100);
              _alert_close();
              _get_page('all_subject', '', 'subject', '','');
            }
          } else {
            $("#warning-div")
              .html(
                '<div><i class="bi-exclamation-triangle"></i></div> ' +
                  message1 +
                  " <br /><span> " +
                  message2 +
                  " </span>"
              )
              .fadeIn(500)
              .delay(5000)
              .fadeOut(100);
          }
          $("#submit_btn").html(btn_text);
          document.getElementById("submit_btn").disabled = false;
        },
      });
    }
  }
}




function _upload_pix(
  page,
  message1,
  message2,
  subject_picture,
  exam_logo,
  old_passport
) {
  if (page == "add_and_update_subject") {
    var action = "upload_subject_pix";
    var new_subject_pix = $("#subject_passport").prop("files")[0];
  } else if (page == "add_and_update_exam") {
    var action = "upload_exam_pix";
    var new_exam_pix = $("#exam_passport").prop("files")[0];
  }

  var form_data = new FormData();
  form_data.append("action", action);
  form_data.append("subject_picture", subject_picture);
  form_data.append("subject_picture", new_subject_pix);

  form_data.append("exam_logo", exam_logo);
  form_data.append("exam_logo", new_exam_pix);

  form_data.append("old_passport", old_passport);

  $.ajax({
    url: admin_local_portal_url,
    type: "POST",
    data: form_data,
    contentType: false,
    cache: false,
    processData: false,
    success: function (html) {
      $("#success-div")
        .html(
          '<div><i class="bi-check"></i></div> ' +
            message1 +
            " <br> " +
            message2 +
            " "
        )
        .fadeIn(500)
        .delay(5000)
        .fadeOut(100);
      if (page == "add_and_update_subject") {
        _get_page('all_subject', '', 'subject', '','');
      } else if (page == "add_and_update_exam") {
         _get_page('exam_category', '', 'exam', '','');
      }
      _alert_close();
    },
  });
}




function _get_fetch_all_subject(div_id) {
  var action = "fetch_subject_api";
  var search_txt = $("#search_txt").val();
  var status_id = $("#status_id").val();
  if (search_txt.length > 2 || search_txt == "") {
    var dataString =
      "action=" +
      action +
      "&status_id=" +
      status_id +
      "&search_txt=" +
      search_txt;
    $.ajax({
      type: "POST",
      url: api,
      data: dataString,
      dataType: "json",
      cache: false,
      success: function (info) {
        var fetch = info.data;
        var result = info.result;
        var message = info.message;

        var text = "";

        if (result == true) {
          for (var i = 0; i < fetch.length; i++) {
            var subject_id = fetch[i].subject_id;
            var subject_name = fetch[i].subject_name.toUpperCase();
            var status_id = fetch[i].status_id;
            var status_name = fetch[i].status_name;

            var subject_passport = fetch[i].subject_passport;
            if (subject_passport == "") {
              subject_passport = "default_pix.jpg";
            }
            if (div_id == "fetch_subject") {
              text +=
                '<div class="grid-div animated fadeIn">' +
                '<div class="div-in">' +
                '<div class="image-div">' +
                '<img src="' +
                website_url +
                "/uploaded_files/subject_pix/" +
                subject_passport +
                '" id="exam-pix" alt="' +
                subject_name +
                '"/>' +
                "</div>" +
                '<div class="ACTIVE '+status_name +'">' +status_name +
                "</div>" +
                '<div class="info-div">' +
                "<h2>" +
                subject_name +
                "</h2>" +
                "<hr></hr>" +
                '<div class="count-div"><i class="bi-book"></i> TOPICS: <span id="">100</span> &nbsp;|&nbsp; <i class="bi-book"></i> SUB-TOPICS: <span id="">100</span> </div>' +
                '<button class="btn" title="EDIT" onclick="_get_form_with_id(' +
                "'add_and_update_subject'" +
                "," +
                "'" +
                subject_id +
                "'" +
                ')"><i class="bi-pencil-square"></i> EDIT</button>' +
                "</div>" +
                "</div>" +
                "</div>";
            } else {
              text +=
                "<label>" +
                '<input type="checkbox" class="child" id="' +
                subject_id +
                '" name="subject_id[]" data-value="' +
                subject_id +
                '"  />' +
                "<span>" +
                subject_name +
                "</span>" +
                "</label>";
            }

            $("#" + div_id).html(text);
          }
        } else {
          text +=
            '<div class="false-notification-div">' +
            "<p> " +
            message +
            " </p>" +
            '<button class="btn" onclick="_get_form(' +"'add_and_update_subject'" +')"><i class="bi-person-plus"></i>ADD NEW SUBJECT</button>' +
            "</div>";
          $("#" + div_id).html(text);
        }
      },
    });
  } else {
    text +=
      '<div class="false-notification-div">' +
      "<p> " +
      message1 +
      " </p>" +
      '<button class="btn" onclick="_get_form(' +"'add_and_update_subject'" +')"><i class="bi-person-plus"></i>ADD NEW SUBJECT</button>' +
      "</div>";
    $("#" + div_id).html(text);
  }
}




function _fetch_each_subject(subject_id) {
  var action = "fetch_subject_api";
  var dataString = "action=" + action + "&subject_id=" + subject_id;
  $.ajax({
    type: "POST",
    url: api,
    data: dataString,
    dataType: "json",
    cache: false,
    success: function (info) {
      var fetch = info.data;
      var subject_name = fetch.subject_name.toUpperCase();
      var subject_url = fetch.subject_url;
      var seo_keywords = fetch.seo_keywords;
      var seo_description = fetch.seo_description;
      var status_id = fetch.status_id;
      var subject_passport = fetch.subject_passport;

      $("#subject_name").val(subject_name);
      $("#subject_url").val(subject_url);
      $("#seo_keywords").val(seo_keywords);
      $("#seo_description").val(seo_description);
      $("#reg_status_id").val(status_id);
      _get_viewpix(subject_passport);
    },
  });
}



function _get_viewpix(subject_passport) {
  var view_pix = "";
  if (subject_passport == "") {
    view_pix =
      '<img src="' +
      website_url +
      '/uploaded_files/subject_pix/default.png" id="exam-pix" alt="profile picture" />';
  } else {
    view_pix =
      '<img src="' +
      website_url +
      "/uploaded_files/subject_pix/" +
      subject_passport +
      '" id="exam-pix" alt="profile picture" />';
  }
  $("#view_pix").html(view_pix);
}



function _add_and_update_exam(page, exam_id) {
  var abbreviation = $("#abbreviation").val();
  var exam_name = $("#exam_name").val();
  var exam_url = $("#exam_url").val();
  var seo_keywords = $("#seo_keywords").val();
  var seo_description = $("#seo_description").val();
  var status_id = $("#reg_status_id").val();

  var exam_logo = $("#exam_passport").val();
  var new_exam_pix = $("#exam_passport").prop("files")[0];
  var check_exam_id=exam_id;
  var subject_id = [];
  $(".child:checked").each(function () {
    subject_id.push($(this).data("value"));
  });

  var checked = $('input[name="subject_id[]"]:checked').length;

  $(
    "#abbreviation, #exam_name, #exam_url, #seo_keywords, #seo_description, #subject_id, #status_id"
  ).removeClass("complain");

  if (abbreviation == "") {
    $("#abbreviation").addClass("complain");
    $("#warning-div")
      .html(
        '<div><i class="bi-exclamation-triangle"></i></div> ABBREVIATION ERROR!<br /><span>Check And Try Again</span>'
      )
      .fadeIn(500)
      .delay(3000)
      .fadeOut(100);
  } else if (exam_name == "") {
    $("#exam_name").addClass("complain");
    $("#warning-div")
      .html(
        '<div><i class="bi-exclamation-triangle"></i></div> EXAM NAME ERROR!<br /><span>Check Exam Name And Try Again</span>'
      )
      .fadeIn(500)
      .delay(3000)
      .fadeOut(100);
  } else if (exam_url == "") {
    $("#exam_url").addClass("complain");
    $("#warning-div")
      .html(
        '<div><i class="bi-exclamation-triangle"></i></div> EXAM URL ERROR!<br /><span>Check Exam URL And Try Again</span>'
      )
      .fadeIn(500)
      .delay(3000)
      .fadeOut(100);
  } else if (seo_keywords == "") {
    $("#seo_keywords").addClass("complain");
    $("#warning-div")
      .html(
        '<div><i class="bi-exclamation-triangle"></i></div> SEO KEYWORDS ERROR!<br /><span>Check Seo Keywords And Try Again</span>'
      )
      .fadeIn(500)
      .delay(3000)
      .fadeOut(100);
  } else if (seo_description == "") {
    $("#seo_description").addClass("complain");
    $("#warning-div")
      .html(
        '<div><i class="bi-exclamation-triangle"></i></div> SEO DESCRIPTION ERROR!<br /><span>Check Seo Description And Try Again</span>'
      )
      .fadeIn(500)
      .delay(3000)
      .fadeOut(100);
  } else if (checked < 1) {
    $("#subject_id").addClass("complain");
    $("#warning-div")
      .html(
        '<div><i class="bi-exclamation-triangle"></i></div> SUBJECT ERROR!<br /><span>Pick at least 1 Subject And Try Again</span>'
      )
      .fadeIn(500)
      .delay(3000)
      .fadeOut(100);
  } else if (status_id == "") {
    $("#reg_status_id").addClass("complain");
    $("#warning-div")
      .html(
        '<div><i class="bi-exclamation-triangle"></i></div> STATUS ERROR!<br /><span>Check Status And Try Again</span>'
      )
      .fadeIn(500)
      .delay(3000)
      .fadeOut(100);
  } else {
    $(
      "#abbreviation, #exam_name, #exam_url, #seo_keywords, #seo_description, #subject_id, #status_id"
    ).removeClass("complain");

    if (confirm("Confirm!!\n\n Are you sure to PERFORM THIS ACTION?")) {
      var btn_text = $("#submit_btn").html();
      $("#submit_btn").html('<i class="fa fa-spinner fa-spin"></i> PROCESSING');
      document.getElementById("submit_btn").disabled = true;

      var action = "add_or_update_exam_api";

      var form_data = new FormData();
      form_data.append("action", action);
      form_data.append("exam_id", exam_id);
      form_data.append("abbreviation", abbreviation);
      form_data.append("exam_name", exam_name);
      form_data.append("exam_url", exam_url);
      form_data.append("seo_keywords", seo_keywords);
      form_data.append("seo_description", seo_description);
      form_data.append("status_id", status_id);
      form_data.append("exam_logo", exam_logo);
      form_data.append("exam_logo", new_exam_pix);
      form_data.append("subject_id", subject_id);

      $.ajax({
        type: "POST",
        url: api,
        data: form_data,
        dataType: "json",
        contentType: false,
        cache: false,
        processData: false,
        success: function (info) {
          var result = info.result;
          var message1 = info.message1;
          var message2 = info.message2;

          if (result == true) {
            var old_passport = info.old_passport;
            var exam_logo = info.exam_logo;
            var exam_id = info.exam_id;
            var exam_url = info.exam_url;
            var all_subject_id = info.all_subject_id;
            var all_subject_urls = info.all_subject_urls;
            var db_exam_url = info.db_exam_url;
  
             if (check_exam_id != exam_id) {
            _create_exam_folder(check_exam_id, exam_id, exam_url, all_subject_id, all_subject_urls);
             }else {
            _update_exam_folder(exam_id, exam_url, db_exam_url, all_subject_id, all_subject_urls);
             }  
            if (exam_logo != "") {
              _upload_pix(
                page,
                message1,
                message2,
                "",
                exam_logo,
                old_passport
              );
            } else {
           
              $("#success-div")
                .html(
                  '<div><i class="bi-check"></i></div> ' +
                    message1 +
                    " <br> " +
                    message2 +
                    " "
                )
                .fadeIn(500)
                .delay(5000)
                .fadeOut(100);
              _alert_close();
              exam_category
              _get_page('exam_category', '', 'exam', '','');
            }
          } else {
            $("#warning-div").html('<div><i class="bi-exclamation-triangle"></i></div> ' + message1 + " <br /><span> " + message2 + " </span>").fadeIn(500).delay(5000).fadeOut(100);
          }
          $("#submit_btn").html(btn_text);
          document.getElementById("submit_btn").disabled = false;
        },
      });
    }
  }
}



function _create_exam_folder(check_exam_id, exam_id, exam_url, all_subject_id, all_subject_urls) {
  var action = "create_exam_folder";

  var form_data = new FormData();
  form_data.append("action", action);
  form_data.append("check_exam_id", check_exam_id);
  form_data.append("exam_id", exam_id);
  form_data.append("exam_url", exam_url);
  form_data.append("all_subject_id", all_subject_id);
  form_data.append("all_subject_urls", all_subject_urls);

  $.ajax({
    url: admin_local_portal_url,
    type: "POST",
    data: form_data,
    dataType: "json",
    contentType: false,
    cache: false,
    processData: false,
    success: function (html) {
      _get_page('exam_category', '', 'exam', '','');
      _alert_close();
    },
  });
}

function _update_exam_folder(exam_id, exam_url, db_exam_url, all_subject_id, all_subject_urls, db_subject_url) {
  var action = "update_exam_folder";

  var form_data = new FormData();
  form_data.append("action", action);
  form_data.append("exam_id", exam_id);
  form_data.append("exam_url", exam_url);
   form_data.append("db_exam_url", db_exam_url);
  form_data.append("all_subject_id", all_subject_id);
  form_data.append("all_subject_urls", all_subject_urls);
  form_data.append("db_subject_url", db_subject_url);

  $.ajax({
    url: admin_local_portal_url,
    type: "POST",
    data: form_data,
    dataType: "json",
    contentType: false,
    cache: false,
    processData: false,
    success: function (html) {
      _get_page('exam_category', '', 'exam', '','');
      _alert_close();
    },
  });
}







function _get_fetch_all_exam() {
  var action = "fetch_exam_api";
  var search_txt = $("#search_txt").val();
  var status_id = $("#status_id").val();
  if (search_txt.length > 2 || search_txt == "") {
    var dataString =
      "action=" +
      action +
      "&status_id=" +
      status_id +
      "&search_txt=" +
      search_txt;
    $.ajax({
      type: "POST",
      url: api,
      data: dataString,
      dataType: "json",
      cache: false,
      success: function (info) {
        var fetch = info.data;
        var result = info.result;
        var message = info.message;

        var text = "";

        if (result == true) {
          for (var i = 0; i < fetch.length; i++) {
            var exam_id = fetch[i].exam_id;
            var abbreviation = fetch[i].abbreviation.toUpperCase();
            var exam_name = fetch[i].exam_name;
            var seo_description = fetch[i].seo_description;
            var status_name = fetch[i].status_name;
            var exam_passport = fetch[i].exam_passport;
            if (exam_passport == "") {
              exam_passport = "default_pix.jpg";
            }

            text +=
              '<div class="record-content-div animated fadeIn">' +
              '<div class="div-in">' +
              '<div class="image-div">' +
                '<img src="' + website_url + "/uploaded_files/exam_pix/" + exam_passport +'" alt="' + abbreviation +'"/>' +
              "</div>" +
              '<div class="text-div">' +
              "<h2>" +
              abbreviation +
              "</h2>" +
              "<p>" +
              seo_description +
              "</p>" +
              '<div class="count-div">' +
              '<div class="count-in"><i class="bi-book"></i> TOPICS: <span id="">100</span> &nbsp;|&nbsp; <i class="bi-book"></i> SUB-TOPICS: <span id="">100</span> &nbsp;|&nbsp; <i class="bi-book"></i> STATUS: <span class="ACTIVE '+status_name +'">' +status_name +
              "</span></div>" +
              '<button class="btn" title="EDIT" onClick="_get_form_with_id(' +
              "'add_and_update_exam'" +
              "," +
              "'" +
              exam_id +
              "'" +
              ');"><i class="bi-pencil-square"></i> EDIT</button>' +
              '<button class="btn btn2" title="EDIT" onClick="_get_page(' +"'subject'" +"," +"'" +exam_id + "'" +"," +"'exam'" +');"><i class="bi-pencil-square"></i> VIEW SUBJECT</button>' +
              "</div>" +
              "</div>" +
              "</div>" +
              "</div>";
          }

          $("#fetch_exam").html(text);
        } else {
          text +=
            '<div class="false-notification-div">' +
            "<p> " +
            message +
            " </p>" +
            '<button class="btn" onclick="_get_form(' +
            "'add_and_update_exam'" +
            ')"><i class="bi-plus-square"></i>ADD NEW EXAM</button>' +
            "</div>";
          $("#fetch_exam").html(text);
        }
      },
    });
  } else {
    text +=
      '<div class="false-notification-div">' +
      "<p> " +
      message1 +
      " </p>" +
      '<button class="btn" onclick="_get_form(' +
      "'add_and_update_exam'" +
      ')"><i class="bi-plus-square"></i>ADD NEW EXAM</button>' +
      "</div>";
    $("#fetch_exam").html(text);
  }
}




function _fetch_each_exam(exam_id) {
  var action = "fetch_exam_api";
  var dataString = "action=" + action + "&exam_id=" + exam_id;
  $.ajax({
    type: "POST",
    url: api,
    data: dataString,
    dataType: "json",
    cache: false,
    success: function (info) {
      var fetch = info.data;
      var abbreviation = fetch.abbreviation;
      var exam_name = fetch.exam_name;
      var exam_url = fetch.exam_url;
      var seo_keywords = fetch.seo_keywords;
      var seo_description = fetch.seo_description;
      var subject_id = fetch.subject_id;
      var status_id = fetch.status_id;
      var exam_passport = fetch.exam_passport;

      $("#abbreviation").val(abbreviation);
      $("#exam_name").val(exam_name);
      $("#exam_url").val(exam_url);
      $("#seo_keywords").val(seo_keywords);
      $("#seo_description").val(seo_description);
      $("#subject_id").val(subject_id);
      $("#reg_status_id").val(status_id);
      _get_view(exam_passport);

      var fetch2 = info.data2;
      var text = "";
      for (var i = 0; i < fetch2.length; i++) {
        var s_subject_id = fetch2[i].subject_id;
        var s_subject_name = fetch2[i].subject_name;
        var checked = fetch2[i].checked;

        text +=
          "<label>" +
          '<input type="checkbox" class="child" id="' +
          s_subject_id +
          '" name="subject_id[]" data-value="' +
          s_subject_id +
          '" ' +
          checked +
          "  />" +
          "<span>" +
          s_subject_name +
          "</span>" +
          "</label>";
      }
      $("#subject_name_with_check").html(text);
    },
  });
}



function _get_view(exam_passport) {
  var view_exam = "";
  if (exam_passport == "") {
    view_exam =
      '<img src="' +
      website_url +
      '/uploaded_files/exam_pix/default.png" id="exam-pix" alt="profile picture" />';
  } else {
    view_exam =
      '<img src="' +
      website_url +
      "/uploaded_files/exam_pix/" +
      exam_passport +
      '" id="exam-pix" alt="profile picture" />';
  }
  $("#view_exam").html(view_exam);
}



function _get_fetch_exam_subject(exam_id) {
  var action = "fetch_exam_subject_api";
  var search_txt = $("#search_txt").val();
  var status_id = $("#status_id").val();
  if (search_txt.length > 2 || search_txt == "") {
    var dataString =
      "action=" +
      action +
      "&exam_id=" +
      exam_id +
      "&status_id=" +
      status_id +
      "&search_txt=" +
      search_txt;
    $.ajax({
      type: "POST",
      url: api,
      data: dataString,
      dataType: "json",
      cache: false,
      success: function (info) {
        var fetch = info.data;
        var result = info.result;
        var message = info.message;

        var text = "";

        if (result == true) {
          for (var i = 0; i < fetch.length; i++) {
            var subject_id = fetch[i].subject_id;
            var exam_id = fetch[i].exam_id;
            var subject_name = fetch[i].subject_name.toUpperCase();
            var status_name = fetch[i].status_name;
            var subject_passport = fetch[i].subject_passport;
            if (subject_passport == "") {
              subject_passport = "default_pix.jpg";
            }

            text +=
              '<div class="grid-div animated fadeIn">' +
              '<div class="div-in">' +
              '<div class="image-div">' +
              '<img src="' +
              website_url +
              "/uploaded_files/subject_pix/" +
              subject_passport +
              '" id="exam-pix" alt="' +
              subject_name +
              '"/>' +
              "</div>" +
              '<div class="ACTIVE '+ status_name +'">' +
              status_name +
              "</div>" +
              '<div class="info-div">' +
              "<h2>" +
              subject_name +
              "</h2>" +
              "<hr></hr>" +
              '<div class="count-div"><i class="bi-book"></i> TOPICS: <span id="">100</span> &nbsp;|&nbsp; <i class="bi-book"></i> SUB-TOPICS: <span id="">100</span> </div>' +
              '<button class="btn btn2" title="EDIT" onClick="_get_page(' + "'topics'" + "," + "'" + '' +"'"  + "," +"'exam'" + "," +"'" +exam_id +"'"  + "," +"'" +subject_id +"'" +');"><i class="bi-pencil-square"></i> VIEW TOPICS</button>' +
              "</div>" +
              "</div>" +
              "</div>";

            $("#fetch_exam_subject").html(text);
          }
        } else {
          text +=
            '<div class="false-notification-div">' +
            "<p> " +
            message +
            " </p>" +
            "</div>";
          $("#fetch_exam_subject").html(text);
        }
      },
    });
  } else {
    text +=
      '<div class="false-notification-div">' +
      "<p> " +
      message1 +
      " </p>" +
      "</div>";
    $("#fetch_exam_subject").html(text);
  }
}





function _add_and_update_topic(topic_id, exam_id, subject_id) {
  var topic_name = $("#topic_name").val();
  var status_id = $("#reg_status_id").val();
  $("#topic_name, #status_id").removeClass("complain");

  if (topic_name == "") {
    $("#topic_name").addClass("complain");
    $("#warning-div")
      .html(
        '<div><i class="bi-exclamation-triangle"></i></div> TOPIC NAME ERROR!<br /><span>Check Topic Name And Try Again</span>'
      )
      .fadeIn(500)
      .delay(3000)
      .fadeOut(100);
  } else if (status_id == "") {
    $("#reg_status_id").addClass("complain");
    $("#warning-div")
      .html(
        '<div><i class="bi-exclamation-triangle"></i></div> STATUS ERROR!<br /><span>Check Status And Try Again <span>'
      )
      .fadeIn(500)
      .delay(3000)
      .fadeOut(100);
  } else {
    $("#topic_name, #status_id").removeClass("complain");

    if (confirm("Confirm!!\n\n Are you sure to PERFORM THIS ACTION?")) {
      var btn_text = $("#submit_btn").html();
      $("#submit_btn").html('<i class="fa fa-spinner fa-spin"></i> PROCESSING');
      document.getElementById("submit_btn").disabled = true;

      var action = "add_or_update_topic_api";

      var form_data = new FormData();
      form_data.append("action", action);
      form_data.append("exam_id", exam_id);
      form_data.append("subject_id", subject_id);
      form_data.append("topic_id", topic_id);
      form_data.append("topic_name", topic_name);
      form_data.append("status_id", status_id);

      $.ajax({
        type: "POST",
        url: api,
        data: form_data,
        dataType: "json",
        contentType: false,
        cache: false,
        processData: false,
        success: function (info) {
          var result = info.result;
          var message1 = info.message1;
          var message2 = info.message2;

          if (result == true) {
              $("#success-div")
                .html(
                  '<div><i class="bi-check"></i></div> ' +
                    message1 +
                    " <br> " +
                    message2 +
                    " "
                )
                .fadeIn(500)
                .delay(5000)
                .fadeOut(100);
              _alert_close();
              _get_page('topics', '', 'exam', exam_id, subject_id);
            
          } else {
            $("#warning-div")
              .html(
                '<div><i class="bi-exclamation-triangle"></i></div> ' +
                  message1 +
                  " <br /><span> " +
                  message2 +
                  " </span>"
              )
              .fadeIn(500)
              .delay(5000)
              .fadeOut(100);
          }
          $("#submit_btn").html(btn_text);
          document.getElementById("submit_btn").disabled = false;
        },
      });
    }
  }
}




function _get_fetch_topic(topic_id,subject_id,exam_id) {
  var action = "fetch_topic_api";
  var search_txt = $("#search_txt").val();
  var status_id = $("#status_id").val();
  if (search_txt.length > 2 || search_txt == "") {

    var dataString ="action=" + action + "&topic_id=" + topic_id + "&subject_id=" + subject_id + "&exam_id=" + exam_id + "&status_id=" + status_id + "&search_txt=" +search_txt;

    $.ajax({
      type: "POST",
      url: api,
      data: dataString,
      dataType: "json",
      cache: false,
      success: function (info) {
        var fetch = info.data;
        var result = info.result;
        var message = info.message;
        var no=0;
        var text = "";

        if (result == true) {
          for (var i = 0; i < fetch.length; i++) {
             no++;
            var exam_id = fetch[i].exam_id;
            var subject_id = fetch[i].subject_id;
            var topic_id = fetch[i].topic_id;
            var topic_name= fetch[i].topic_name.toUpperCase();
            var status_name = fetch[i].status_name;
        
            text +=
            '<div class="quest-faq-div animated fadeIn">'+
            '<div class="faq-title-text">'+
             '<h3>'+ topic_name +' <button class="btn" title="ADD NEW SUB TOPIC" onClick="_get_form_with_id(' + "'sub_topics_reg'" + "," + "'" + '' +"'" + ", " + "'" + subject_id +"'" + "," +"'" + topic_id +"'" +');"><i class="bi-plus-square"></i> ADD NEW SUB-TOPIC</button> <button class="btn btn-2" title="EDIT TOPIC" onClick="_get_form_with_id(' + "'topics_reg'" + "," +"'" + topic_id +"'" + "," +"'" + exam_id +"'" + "," +"'" + subject_id +"'" +');"><i class="bi-pencil-square"></i> EDIT</button></h3>'+
            '</div>'+
            
            '<div class="faq-answer-div" onclick="_collapse('+"'"+'view'+no+"'"+ "," + "'" + '' +"'"  +"," +"'" +topic_id +"'" +')">'+
                '<span>Sub Topics: </span>&nbsp;&nbsp;<span class="count-div">83443</span> &nbsp;&nbsp;| &nbsp;'+
                '<span>Status: </span>&nbsp;&nbsp;<span class="count-div status '+ status_name +'">'+ status_name +'</span>'+
                '<div class="expand-div" id="'+"view"+no+"num"+'" onClick="_get_fetch_sub_topic('+"'"+'view'+no+"'"+ "," + "'" + '' +"'" + ", "  +"'" +topic_id +"'" +');">&nbsp;<i class="bi-plus"></i>&nbsp;</div>'+                         
            '</div>'+
            
            '<div class="faq-answer-div" id="'+"view"+no+"answer"+'" style="display: none;">'+
              '<div class="" id="sub_topic_view'+no+'">'+
              
                //// fetch all sub topic under each topic
                
              '</div>'+
            '</div>'+
        '</div>';

            $("#fetch_topic").html(text);
          }
        } else {
          text +=
            '<div class="false-notification-div">' +
            "<p> " +
            message +
            " </p>" +
            "</div>";
          $("#fetch_topic").html(text);
        }
      },
    });
  } else {
    text +=
      '<div class="false-notification-div">' +
      "<p> " +
      message1 +
      " </p>" +
      "</div>";
    $("#fetch_topic").html(text);
  }
}




function _get_fetch_sub_topic(div_id,sub_topic_id,topic_id) {
  var action = "fetch_sub_topic_api";
    var dataString ="action=" + action +"&sub_topic_id=" + sub_topic_id + "&topic_id=" + topic_id;
    $.ajax({
      type: "POST",
      url: api,
      data: dataString,
      dataType: "json",
      cache: false,
      success: function (info) {
        var fetch = info.data;
        var result = info.result;
        var message = info.message;
        var no=0;
        var text = "";

        if (result == true) {
          for (var i = 0; i < fetch.length; i++) {
             no++;
            var sub_topic_id = fetch[i].sub_topic_id;
            var sub_topic_name= fetch[i].sub_topic_name.toUpperCase();
            var subject_id= fetch[i].subject_id;
            var seo_description = fetch[i].seo_description;
            var sub_topic_passport = fetch[i].sub_topic_passport;
            if (sub_topic_passport == "") {
              sub_topic_passport = "default_pix.jpg";
            }
            text +=
            '<div class="topics-content-div">'+
              '<div class="image-div">'+
                  '<img src="'+ website_url + "/uploaded_files/sub_topic_pix/" + sub_topic_passport + '" alt="'+ sub_topic_name +'"/>'+
              '</div>'+
              '<div class="text">'+
                '<h4>'+ sub_topic_name +'</h4>'+
                '<p>'+ seo_description +'</p>'+
                '<div class="bottom-div"><button class="btn edit" title="EDIT SUB-TOPIC" onClick="_get_form_with_id(' +"'sub_topics_reg'" + "," +"'" + sub_topic_id +"'" + "," +"'" + subject_id +"'" + "," +"'" +topic_id +"'" + "," + "'" + '' +"'" +');"><i class="bi-pencil-square"></i> EDIT</button>'+
                '<div class="numbs"><button class="btn" title="VIEW VIDEOS" onClick="_get_page(' + "'videos'" + "," + "''" + "," +"'exam'" + "," +"'" + topic_id +"'" + "," +"'" + sub_topic_id +"'"  +');">NUMBER OF VIDEOS <span class="count">10</span> </button></div></div>'+
              '</div>'+
            '</div>';

          }
           $('#'+"sub_topic_"+div_id).html(text);
        }
      }
    });
}



  function _get_fetch_each_sub_topic(sub_topic_id,subject_id,topic_id) {
  var action = "fetch_sub_topic_api";

  var dataString = "action=" + action + "&sub_topic_id=" + sub_topic_id+ "&subject_id=" + subject_id+ "&topic_id=" + topic_id;

  $.ajax({
    type: "POST",
    url: api,
    data: dataString,
    dataType: "json",
    cache: false,
    success: function (info) {
      var fetch = info.data;
    
      var sub_topic_name = fetch.sub_topic_name.toUpperCase();
      var sub_topic_url = fetch.sub_topic_url;
      var subscription_price = fetch.subscription_price;
      var seo_keywords = fetch.seo_keywords;
      var seo_description = fetch.seo_description;
      var subscription_duration_id = fetch.subscription_duration_id;
      var sub_topic_passport = fetch.sub_topic_passport;
      var status_id = fetch.status_id;

      $("#sub_topic_name").val(sub_topic_name);
      $("#sub_topic_url").val(sub_topic_url);
      $("#subscription_price").val(subscription_price);
      $("#seo_keywords").val(seo_keywords);
      $("#seo_description").val(seo_description);
      $("#subscription_duration_id").val(subscription_duration_id);
      $("#reg_status_id").val(status_id);
   
      _get_sub_view(sub_topic_passport);
    }
  });
}




function _get_sub_view(sub_topic_passport) {
  var view_sub_topic = "";
  if (sub_topic_passport == "") {
    view_sub_topic =
    '<img src="'+ website_url + '"/uploaded_files/sub_topic_pix/default.png" alt="default"/>';
  } else {
    view_sub_topic ='<img src="' +website_url +
      "/uploaded_files/sub_topic_pix/" +
      sub_topic_passport +
      '" id="exam-pix" alt="profile picture" />';
  }
  $("#view_sub_topic").html(view_sub_topic);
}



function _get_fetch_each_topic(topic_id,subject_id) {
  var action = "fetch_topic_api";
  var dataString = "action=" + action + "&topic_id=" + topic_id + "&subject_id=" + subject_id;
  $.ajax({
    type: "POST",
    url: api,
    data: dataString,
    dataType: "json",
    cache: false,
    success: function (info) {
      var fetch = info.data;
      var topic_name = fetch.topic_name.toUpperCase();
      var status_id = fetch.status_id;

      $("#topic_name").val(topic_name);
      $("#reg_status_id").val(status_id);
    },
  });
}


function _add_and_update_sub_topic(sub_topic_id,subject_id,topic_id) {
  var sub_topic_name = $("#sub_topic_name").val();
  var sub_topic_url = $("#sub_topic_url").val();
  var subscription_price = $("#subscription_price").val();
  var seo_keywords = $("#seo_keywords").val();
  var seo_description  = $("#seo_description").val();
  var sub_topic_logo = $("#sub_topic_passport").val();
  var new_sub_topic_pix = $("#sub_topic_passport").prop("files")[0];
  var status_id = $("#reg_status_id").val();
  var subscription_duration_id = $("#subscription_duration_id").val();
  var check_sub_topic_id=sub_topic_id;

  $("#sub_topic_name, #sub_topic_url, #subscription_price, #seo_keywords, #seo_description, #subscription_duration_id, #status_id").removeClass("complain");

  if (sub_topic_name == "") {
    $("#sub_topic_name").addClass("complain");
    $("#warning-div")
      .html(
        '<div><i class="bi-exclamation-triangle"></i></div>SUB TOPIC NAME ERROR!<br /><span>Check Sub Topic Name And Try Again</span>'
      )
      .fadeIn(500)
      .delay(3000)
      .fadeOut(100);

  } else if (sub_topic_url == "") {
    $("#sub_topic_url").addClass("complain");
    $("#warning-div")
      .html(
        '<div><i class="bi-exclamation-triangle"></i></div>SUB TOPIC URL ERROR!<br /><span>Check Sub Topic Url And Try Again</span>'
      )
      .fadeIn(500)
      .delay(3000)
      .fadeOut(100);

  } else if (subscription_price == "") {
      $("#subscription_price").addClass("complain");
      $("#warning-div")
        .html(
          '<div><i class="bi-exclamation-triangle"></i></div>SUBSCRIPTION PRICE ERROR!<br /><span>Check Sub Price And Try Again</span>'
        )
        .fadeIn(500)
        .delay(3000)
        .fadeOut(100);

  } else if (seo_keywords == "") {
    $("#seo_keywords").addClass("complain");
    $("#warning-div")
      .html(
        '<div><i class="bi-exclamation-triangle"></i></div> SEO KEYWORDS ERROR!<br /><span>Check Seo Keywords And Try Again</span>'
      )
      .fadeIn(500)
      .delay(3000)
      .fadeOut(100);

    } else if (seo_description == "") {
      $("#seo_description").addClass("complain");
      $("#warning-div")
        .html(
          '<div><i class="bi-exclamation-triangle"></i></div> SEO DESCRIPTION ERROR!<br /><span>Check Seo Description And Try Again</span>'
        )
        .fadeIn(500)
        .delay(3000)
        .fadeOut(100);

    } else if (subscription_duration_id == "") {
      $("#subscription_duration_id").addClass("complain");
      $("#warning-div")
        .html(
          '<div><i class="bi-exclamation-triangle"></i></div> SUBSCRIPTION DURATION ERROR!<br /><span>Check Sub Duration And Try Again</span>'
        )
        .fadeIn(500)
        .delay(3000)
        .fadeOut(100);

  } else if (status_id == "") {
    $("#reg_status_id").addClass("complain");
    $("#warning-div")
      .html(
        '<div><i class="bi-exclamation-triangle"></i></div> STATUS ERROR!<br /><span>Check Status And Try Again <span>'
      )
      .fadeIn(500)
      .delay(3000)
      .fadeOut(100);

  } else {

     $("#sub_topic_name, #sub_topic_url, #subscription_price, #seo_keywords, #seo_description, #subscription_duration_id, #status_id").removeClass("complain");

    if (confirm("Confirm!!\n\n Are you sure to PERFORM THIS ACTION?")) {
      var btn_text = $("#submit_btn").html();
      $("#submit_btn").html('<i class="fa fa-spinner fa-spin"></i> PROCESSING');
      document.getElementById("submit_btn").disabled = true;

      var action = "add_or_update_sub_topic_api";

      var form_data = new FormData();
      form_data.append("action", action);
      form_data.append("subject_id", subject_id);
      form_data.append("topic_id", topic_id);
      form_data.append("sub_topic_id", sub_topic_id);
      form_data.append("sub_topic_name", sub_topic_name);
      form_data.append("sub_topic_url", sub_topic_url);
      form_data.append("subscription_price", subscription_price);
      form_data.append("seo_keywords", seo_keywords);
      form_data.append("seo_description", seo_description);
      form_data.append("subscription_duration_id", subscription_duration_id);
      form_data.append("status_id", status_id);
      form_data.append("sub_topic_logo", sub_topic_logo);
      form_data.append("sub_topic_logo", new_sub_topic_pix);

      $.ajax({
        type: "POST",
        url: api,
        data: form_data,
        dataType: "json",
        contentType: false,
        cache: false,
        processData: false,
        success: function (info) {
          var result = info.result;
          var message1 = info.message1;
          var message2 = info.message2;

          if (result == true) {
            var sub_topic_logo = info.sub_topic_logo;
            var old_sub_topic_passport = info.old_sub_topic_passport;
            var sub_topic_id = info.sub_topic_id;
            var exam_url = info.exam_url;
            var subject_url = info.subject_url;
            var sub_topic_url = info.sub_topic_url;
            var db_sub_topic_url = info.db_sub_topic_url;
            var exam_id = info.exam_id;

            if (check_sub_topic_id != sub_topic_id) {
              _create_sub_topic_folder(check_sub_topic_id, sub_topic_id, sub_topic_url, exam_url, subject_url, exam_id, subject_id);
               }else {
              _update_sub_topic_folder(sub_topic_id, sub_topic_url, exam_url, subject_url, db_sub_topic_url, exam_id, subject_id);
              }
            if (sub_topic_logo != "") {
              _upload_sub_topic_pix(message1, message2, sub_topic_logo, old_sub_topic_passport, exam_id, subject_id);           
     
              $("#success-div")
                .html(
                  '<div><i class="bi-check"></i></div> ' +
                    message1 +
                    " <br> " +
                    message2 +
                    " "
                )
                .fadeIn(500)
                .delay(5000)
                .fadeOut(100);
              _alert_close();
              _get_page('topics', '', 'exam', exam_id, subject_id);
            }
          } else {
            $("#warning-div").html('<div><i class="bi-exclamation-triangle"></i></div> ' +message1 +" <br /><span> " +message2 + " </span>").fadeIn(500) .delay(5000).fadeOut(100);
          }
          $("#submit_btn").html(btn_text);
          document.getElementById("submit_btn").disabled = false;
        },
      });
    }
  }
}



function _upload_sub_topic_pix(message1, message2, sub_topic_logo, old_sub_topic_passport, exam_id, subject_id) {
  var action = "upload_sub_topic_pix";
  var new_sub_topic_pix = $("#sub_topic_passport").prop("files")[0];

  var form_data = new FormData();
  form_data.append("action", action);
  form_data.append("sub_topic_logo", sub_topic_logo);
  form_data.append("sub_topic_logo", new_sub_topic_pix);

  form_data.append("old_sub_topic_passport", old_sub_topic_passport);

  $.ajax({
    url: admin_local_portal_url,
    type: "POST",
    data: form_data,
    contentType: false,
    cache: false,
    processData: false,
    success: function (html) {
      $("#success-div").html('<div><i class="bi-check"></i></div> ' +message1 +" <br> " +message2 +" ").fadeIn(500).delay(5000).fadeOut(100);
        _get_page('topics', '', 'exam', exam_id, subject_id);
      _alert_close();
    },
  });
}


function _create_sub_topic_folder(check_sub_topic_id, sub_topic_id, sub_topic_url, exam_url, subject_url, exam_id, subject_id) {
  var action = "create_sub_topic_folder";

  var form_data = new FormData();
  form_data.append("action", action);
   form_data.append("check_sub_topic_id", check_sub_topic_id);
  form_data.append("sub_topic_id", sub_topic_id);
  form_data.append("sub_topic_url", sub_topic_url);
  form_data.append("exam_url", exam_url);
  form_data.append("subject_url", subject_url);

  $.ajax({
    url: admin_local_portal_url,
    type: "POST",
    data: form_data,
    dataType: "json",
    contentType: false,
    cache: false,
    processData: false,
    success: function (html) {
      _get_page('topics', '', 'exam', exam_id, subject_id);
      _alert_close();
    },
  });
}



function _update_sub_topic_folder(sub_topic_id, sub_topic_url, exam_url, subject_url, db_sub_topic_url, exam_id, subject_id) {
  var action = "update_sub_topic_folder";

  var form_data = new FormData();
  form_data.append("action", action);
  form_data.append("sub_topic_id", sub_topic_id);
  form_data.append("sub_topic_url", sub_topic_url);
  form_data.append("exam_url", exam_url);
  form_data.append("subject_url", subject_url);
  form_data.append("db_sub_topic_url", db_sub_topic_url);

  $.ajax({
    url: admin_local_portal_url,
    type: "POST",
    data: form_data,
    dataType: "json",
    contentType: false,
    cache: false,
    processData: false,
    success: function (html) {
      _get_page('topics', '', 'exam', exam_id, subject_id);
      _alert_close();
    },
  });
}





function _add_and_update_sub_topic_video(video_id,topic_id,sub_topic_id) {
  var video_title = $("#video_title").val();
  var video_objective = $("#video_objective").val();
  var video_duration_id = $("#video_duration_id").val();
  var video_volume_id = $("#video_volume_id").val();
  var subscription_pricing_id  = $("#subscription_pricing_id").val();
  var new_video = $("#video").prop("files")[0];
  var video_logo = $("#video_passport").val();
  var new_video_pix = $("#video_passport").prop("files")[0];
  var status_id = $("#reg_status_id").val();

  $("#video_title, #video_objective, #video_duration_id, #subscription_pricing_id, #new_video, #status_id").removeClass("complain");

  if (video_title == "") {
    $("#video_title").addClass("complain");
    $("#warning-div")
      .html(
        '<div><i class="bi-exclamation-triangle"></i></div>VIDEO TITLE ERROR!<br /><span>Check  Video Title And Try Again</span>'
      )
      .fadeIn(500)
      .delay(3000)
      .fadeOut(100);

  } else if (video_objective == "") {
    $("#video_objective").addClass("complain");
    $("#warning-div")
      .html('<div><i class="bi-exclamation-triangle"></i></div> VIDEO OBJECTIVE ERROR!<br /><span>Check Video Objective And Try Again</span>'
      )
      .fadeIn(500)
      .delay(3000)
      .fadeOut(100);

  } else if (video_duration_id == "") {
    $("#video_duration_id").addClass("complain");
    $("#warning-div")
      .html(
        '<div><i class="bi-exclamation-triangle"></i></div>VIDEO DURATION ERROR!<br /><span>Check Video Duration And Try Again</span>'
      )
      .fadeIn(500)
      .delay(3000)
      .fadeOut(100);

  } else if (video_volume_id == "") {
    $("#video_volume_id").addClass("complain");
    $("#warning-div")
      .html(
        '<div><i class="bi-exclamation-triangle"></i></div>VIDEO VOLUME ERROR!<br /><span>Check Video Volume And Try Again</span>'
      )
      .fadeIn(500)
      .delay(3000)
      .fadeOut(100);

  } else if (new_video == "") {
    $("#video").addClass("complain");
    $("#warning-div")
      .html(
        '<div><i class="bi-exclamation-triangle"></i></div> VIDEO ERROR!<br /><span>Upload Video And Try Again</span>'
      )
      .fadeIn(500)
      .delay(3000)
      .fadeOut(100);

  } else if (subscription_pricing_id == "") {
      $("#subscription_pricing_id").addClass("complain");
      $("#warning-div")
        .html(
          '<div><i class="bi-exclamation-triangle"></i></div> SUB PRICING ERROR!<br /><span>Check Sub Pricing And Try Again <span>'
        )
        .fadeIn(500)
        .delay(3000)
        .fadeOut(100);

  } else if (status_id == "") {
    $("#reg_status_id").addClass("complain");
    $("#warning-div")
      .html(
        '<div><i class="bi-exclamation-triangle"></i></div> STATUS ERROR!<br /><span>Check Status And Try Again <span>'
      )
      .fadeIn(500)
      .delay(3000)
      .fadeOut(100);

  } else {
    $("#video_title, #video_objective, #video_duration_id, #subscription_pricing_id, #new_video, #status_id").removeClass("complain");

    if (confirm("Confirm!!\n\n Are you sure to PERFORM THIS ACTION?")) {
      var btn_text = $("#submit_btn").html();
      $("#submit_btn").html('<i class="fa fa-spinner fa-spin"></i> PROCESSING');
      document.getElementById("submit_btn").disabled = true;

      var action = "add_or_update_sub_topic_video_api";

      var form_data = new FormData();
      form_data.append("action", action);
      form_data.append("topic_id", topic_id);
      form_data.append("sub_topic_id", sub_topic_id);
      form_data.append("video_id", video_id);
      form_data.append("video_title", video_title);
      form_data.append("video_objective", video_objective);
      form_data.append("video_duration_id", video_duration_id);
      form_data.append("video_volume_id", video_volume_id);
      form_data.append("subscription_pricing_id", subscription_pricing_id);
      form_data.append("status_id", status_id);
      form_data.append("video", new_video);
      form_data.append("video_logo", video_logo);
      form_data.append("video_logo", new_video_pix);

      $.ajax({
        type: "POST",
        url: api,
        data: form_data,
        dataType: "json",
        contentType: false,
        cache: false,
        processData: false,
        success: function (info) {
          var result = info.result;
          var message1 = info.message1;
          var message2 = info.message2;

          if (result == true) {
            var video_id = info.video_id;
            var topic_id = info.topic_id;
            var sub_topic_id = info.sub_topic_id;
            var video_logo = info.video_logo;
            var old_video_passport = info.old_video_passport;
            var video = info.video;
            var old_video = info.old_video;

            _upload_sub_video(message1, message2, video, old_video, video_id, topic_id, sub_topic_id);
            _upload_video_pix(message1, message2, video_logo, old_video_passport, video_id, topic_id, sub_topic_id);
            $("#success-div").html('<div><i class="bi-check"></i></div> ' + message1 +" <br> " + message2 +" ").fadeIn(500).delay(5000).fadeOut(100);
            _alert_close();
            _get_page('videos', '', 'exam', topic_id, sub_topic_id);
 
          } else {
            $("#warning-div")
              .html('<div><i class="bi-exclamation-triangle"></i></div> ' + message1 + " <br /><span> " +message2 +" </span>").fadeIn(500).delay(5000).fadeOut(100);
          }
          $("#submit_btn").html(btn_text);
          document.getElementById("submit_btn").disabled = false;
        },
      });
    }
  }
}


function _upload_sub_video(message1, message2, video, old_video, video_id, topic_id, sub_topic_id){
  var action = "upload_sub_topic_video";
  var new_video = $("#video").prop("files")[0];

  var form_data = new FormData();
  form_data.append("action", action);
  form_data.append("video_id", video_id);
  form_data.append("video", video);
  form_data.append("video", new_video);
  form_data.append("old_video", old_video);

  $.ajax({
    url: admin_local_portal_url,
    type: "POST",
    data: form_data,
    contentType: false,
    cache: false,
    processData: false,
    success: function (html) {
      $("#success-div")
        .html('<div><i class="bi-check"></i></div> ' +message1 +" <br> " +message2 +" ").fadeIn(500).delay(5000).fadeOut(100);
        _get_page('videos', '', 'exam', topic_id, sub_topic_id);
      _alert_close();
    },
  });
}



function _upload_video_pix(message1, message2, video_logo, old_video_passport, video_id, topic_id, sub_topic_id) {
  var action = "upload_video_pix";
  var new_video_pix = $("#video_passport").prop("files")[0];

  var form_data = new FormData();
  form_data.append("action", action);
  form_data.append("video_id", video_id);
  form_data.append("video_logo", video_logo);
  form_data.append("video_logo", new_video_pix);
  form_data.append("old_video_passport", old_video_passport);

  $.ajax({
    url: admin_local_portal_url,
    type: "POST",
    data: form_data,
    contentType: false,
    cache: false,
    processData: false,
    success: function (html) {
      $("#success-div")
        .html('<div><i class="bi-check"></i></div> ' +message1 +" <br> " +message2 +" ").fadeIn(500).delay(5000).fadeOut(100);
        _get_page('videos', '', 'exam', topic_id, sub_topic_id);
      _alert_close();
    },
  });
}





function _get_fetch_sub_topic_video(video_id,topic_id,sub_topic_id) {
  var action = "fetch_sub_topic_video_api";
  var search_txt = $("#search_txt").val();
  var status_id = $("#status_id").val();
  if (search_txt.length > 2 || search_txt == "") {

    var dataString ="action=" + action + "&video_id=" + video_id + "&topic_id=" + topic_id + "&sub_topic_id=" + sub_topic_id + "&status_id=" + status_id + "&search_txt=" + search_txt;

    $.ajax({
      type: "POST",
      url: api,
      data: dataString,
      dataType: "json",
      cache: false,
      success: function (info) {
        var fetch = info.data;
        var result = info.result;
        var message = info.message;
        var text = "";

        if (result == true) {
          for (var i = 0; i < fetch.length; i++) {
            var video_id = fetch[i].video_id;
            var topic_id = fetch[i].topic_id;
            var sub_topic_id = fetch[i].sub_topic_id;
            var video_title= fetch[i].video_title.toUpperCase();
            var video_objective = fetch[i].video_objective;
            var video_duration_id  = fetch[i].video_duration_id;
            var video_passport = fetch[i].video_passport;
            var video_volume_name = fetch[i].video_volume_name;
            var subscription_pricing_name  = fetch[i].subscription_pricing_name;

            text +=

                '<div class="faq-answer-div" id="faq1answer">'+  
                    '<div class="topics-content-div">'+
                        '<div class="image-div video-img">'+
                            '<img src="'+ website_url +'/uploaded_files/sub_topic_video_pix/'+ video_passport +'" alt="'+ video_title +'"/>'+
                        '</div>'+

                        '<div class="text video-text">'+
                            '<h4>'+ video_title +'</h4>'+
                            '<p>'+ video_objective +'</p>'+
                            '<div class="bottom-div"><button class="btn" title="EDIT SUB-TOPIC VIDEO" onClick="_get_form_with_id(' + "'video_reg'" + "," +"'" + video_id +"'" + "," +"'" + topic_id +"'" + "," +"'" + sub_topic_id +"'" + ');"><i class="bi-pencil-square"></i> EDIT</button>&nbsp;<span class="volume">'+ video_volume_name +'</span> &nbsp;|<span class="volume">'+ subscription_pricing_name +'</span> &nbsp;|<span class="volume">'+ video_duration_id +'</span></div>'+
                        '</div>'+
                    '</div>'+
                '</div>';
            

            $("#fetch_sub_topic_video").html(text);
          }
        } else {
          text +=
            '<div class="false-notification-div">' +
            "<p> " +
            message +
            " </p>" +
            "</div>";
          $("#fetch_sub_topic_video").html(text);
        }
      },
    });
  } else {
    text +=
      '<div class="false-notification-div">' +
      "<p> " +
      message1 +
      " </p>" +
      "</div>";
    $("#fetch_sub_topic_video").html(text);
  }
}





function _get_fetch_each_sub_video_topic(video_id,topic_id,sub_topic_id) {
  var action = "fetch_sub_topic_video_api";

  var dataString = "action=" + action + "&video_id=" + video_id + "&topic_id=" + topic_id + "&sub_topic_id=" + sub_topic_id;

  $.ajax({
    type: "POST",
    url: api,
    data: dataString,
    dataType: "json",
    cache: false,
    success: function (info) {
      var fetch = info.data;
    
      var video_title = fetch.video_title.toUpperCase();
      var video_objective = fetch.video_objective;
      var video_duration_id = fetch.video_duration_id
      var video_volume_id = fetch.video_volume_id;
      var subscription_pricing_id = fetch.subscription_pricing_id;
      var video_passport = fetch.video_passport;
      var video = fetch.video;
      var status_id = fetch.status_id;

      $("#video_title").val(video_title);
      $("#video_objective").val(video_objective);
      $("#video_duration_id").val(video_duration_id);
      $("#video_volume_id").val(video_volume_id);
      $("#subscription_pricing_id").val(subscription_pricing_id);
      $("#reg_status_id").val(status_id);
   
      _get_sub_video_pix_view(video_passport);
      _get_sub_video_view(video);
    }
  });
}


function _get_sub_video_pix_view(video_passport) {
  var view_sub_topic_video_view = "";
  if (video_passport == "") {
    view_sub_topic_video_view =
    '<img src="'+ website_url + '"/uploaded_files/sub_topic_video_pix/default.png" alt="default"/>';
  } else {
    view_sub_topic_video_view =
    '<img src="' +website_url +"/uploaded_files/sub_topic_video_pix/" +video_passport +'" id="exam-pix" alt="profile picture" />';
  }
  $("#view_sub_topic_video_view").html(view_sub_topic_video_view);
}


function _get_sub_video_view(video) {
  var view_sub_topic_video = "";
  view_sub_topic_video ='<video src="'+ website_url +"/uploaded_files/videos/" + video +'" id="videoDisplay" autoplay="" muted="" loop="" class="video-slide">';
  
  $("#view_sub_topic_video").html(view_sub_topic_video);
}






function _check_password2(){
  var password = $('#new_password').val();
  if (password==''){
   $('#pswd_info').hide();
   $('.pswd_info').fadeIn(500);
   document.getElementById('new_password').style.border='rgba(0, 0, 0, .1) 1px solid';
  }else{
   $('.pswd_info').hide();
     if(password.length>=8){
           if (password.match(/^(?=[^A-Z]*[A-Z])(?=[^!"#$%&'()*+,-.:;<=>?@[\]^_`{|}~]*[!"#$%&'()*+,-.:;<=>?@[\]^_`{|}~])(?=\D*\d).{8,}$/)) {
           $('.pswd_info').hide();
           document.getElementById('new_password').style.border='rgba(0, 0, 0, .1) 1px solid';

          } else {
            $('.pswd_info').fadeIn(500);
          }
     }else{
        $('.pswd_info').fadeIn(500);  
        document.getElementById('new_password').style.border='#F00 1px solid';
     }
  }
}






var _check_password3 = function() {
     if (document.getElementById('new_password').value == document.getElementById('confirmed_password').value) {
     document.getElementById('new_password').style.border='rgba(0, 0, 0, .1) 1px solid';
     document.getElementById('confirmed_password').style.border='rgba(0, 0, 0, .1) 1px solid';
     document.getElementById('message').style.display = 'none';
     _check_password2();
     } else {
        _check_password2();
     document.getElementById('new_password').style.border='#F00 1px solid';
     document.getElementById('confirmed_password').style.border='#F00 1px solid';
     document.getElementById('message').style.display = 'block';
     document.getElementById('message').style.color = 'hsla(0, 100%, 40%, 0.678)';
     document.getElementById('message').style.fontSize = '12px';
     document.getElementById('message').innerHTML = 'password not match!';
     }
  }




function _update_user_password(staff_id) {
  var old_password=$('#old_password').val();
  var new_password=$('#new_password').val();
  var confirmed_password=$('#confirmed_password').val();
  $('#old_password, #new_password, #confirmed_password').removeClass('complain');

  if(old_password==''){
  $('#old_password').addClass('complain');
  $('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> Please Fill The Old Passwords<br /><span>Fields cannot be empty</span>').fadeIn(500).delay(5000).fadeOut(100);
  } else if(new_password==''){
     $('#new_password').addClass('complain');
     $('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> Please Fill New Passwords<br /><span>Fields cannot be empty</span>').fadeIn(500).delay(5000).fadeOut(100);

  }else if(confirmed_password==''){
     $('#confirmed_password').addClass('complain');
     $('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> Please Fill Confirm Passwords<br /><span>Fields cannot be empty</span>').fadeIn(500).delay(5000).fadeOut(100);
  }else if(new_password !=confirmed_password){
     $('#new_password, #confirmed_password').addClass('complain');
     $('#warning-div').html('<div><i class="bi-exclamation-triangle"></i></div> Please Fill New Confirm Passwords<br /><span>Fields cannot be empty</span>').fadeIn(500).delay(5000).fadeOut(100);
  }else{

    if (confirm("Confirm!!\n\n Are you sure to PERFORM THIS ACTION?")) {
      var btn_text = $("#update_btn").html();
      $("#update_btn").html('<i class="fa fa-spinner fa-spin"></i> PROCESSING');
      document.getElementById("update_btn").disabled = true;

      var action = "change_password_api";

      var form_data = new FormData();
      form_data.append("action", action);
      form_data.append("staff_id", staff_id);
      form_data.append("old_password", old_password);
      form_data.append("new_password", new_password);
      form_data.append("confirmed_password", confirmed_password);

      $.ajax({
        type: "POST",
        url: api,
        data: form_data,
        dataType: "json",
        contentType: false,
        cache: false,
        processData: false,
        success: function (info) {
          var result = info.result;
          var message1 = info.message1;
          var message2 = info.message2;

     if (result==true){
      $("#success-div").html('<div><i class="bi-check"></i></div> ' + message1 +" <br> " + message2 +" ").fadeIn(500).delay(5000).fadeOut(100);
        _alert_close();
      $('#login_user_fullname').html('XXXXX');
      _get_form('access_key_validation_info');
     }else{
      $("#warning-div").html('<div><i class="bi-exclamation-triangle"></i></div> ' +message1 +" <br /><span> " +message2 + " </span>").fadeIn(500) .delay(5000).fadeOut(100);
     $('#old_password').addClass('complain');
     }
     $('#update_btn').html(btn_text);
     document.getElementById('update_btn').disabled=false;
  }
  });
  }
}
}