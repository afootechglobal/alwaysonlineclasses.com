<?php if ($page=='dashboard'){?>

                    <div class="table-div animated fadeIn" id="search-content">
                        <div class="div-in">
                            <div class="container-title title2"><i class="bi-pencil-square"></i>  EXAM SUBCRIPTION </div>
                                <div class="input-search-div">
                                    <!-- <input id="search_txt" onkeyup="_fetch_users_list()" type="text" class="text_field" placeholder="Type here to search..." title="Type here to search" /> -->
                                    <button type="button" class="top-btn" onClick="_get_page('exam_category', 'exam')">Subcribe <i class="bi bi-box-arrow-in-up-right"></i></button>
                                </div>
                         

                            <table class="table" cellspacing="0" style="width:100%" >
                                <tr class="tb-col">
                                    <td>SN</td>
                                    <td>EXAM</td>
                                    <td>SUBJECT</td>
                                    <td>TOPIC</td>
                                    <td>SUB-TOPIC</td>
                                    <td>DATE</td>
                                    <td>DUE DATE</td>
                                    <td>STATUS</td>
                                    <td>ACTION</td>
                                </tr>

                                <tr>
                                    <td>1</td>
                                    <td class="logo-tb"><div class="logo-div"><img src="<?php echo $website_url?>/uploaded_files/exam_pix/ssce.png" alt=""/> </div><span id="">WAEC</span>  </td>
                                    <td>ENGLISH LANGUAGE</td>
                                    <td>NOUN</td>
                                    <td>NOUN PHRASE</td>
                                    <td>2023-08-03 12:25:27</td>
                                    <td>2023-08-03 12:25:27</td>
                                    <td><div class="status-div SUCCESS">ACTIVE</div></td>
                                    <td><button class="btn"><i class="bi bi-play"></i> PLAY</button></td>
                                </tr>

                                <tr>
                                    <td>2</td>
                                    <td class="logo-tb"><div class="logo-div"><img src="<?php echo $website_url?>/uploaded_files/exam_pix/ssce.png" alt=""/> </div><span id="">WAEC</span>  </td>
                                    <td>ENGLISH LANGUAGE</td>
                                    <td>NOUN</td>
                                    <td>NOUN PHRASE</td>
                                    <td>2023-08-03 12:25:27</td>
                                    <td>2023-08-03 12:25:27</td>
                                    <td><div class="status-div SUCCESS">ACTIVE</div></td>
                                    <td><button class="btn"><i class="bi bi-play"></i> PLAY</button></td>
                                </tr>

                                <tr>
                                    <td>3</td>
                                    <td class="logo-tb"><div class="logo-div"><img src="<?php echo $website_url?>/uploaded_files/exam_pix/ssce.png" alt=""/> </div><span id="">WAEC</span>  </td>
                                    <td>ENGLISH LANGUAGE</td>
                                    <td>NOUN</td>
                                    <td>NOUN PHRASE</td>
                                    <td>2023-08-03 12:25:27</td>
                                    <td>2023-08-03 12:25:27</td>
                                    <td><div class="status-div SUCCESS">ACTIVE</div></td>
                                    <td><button class="btn"><i class="bi bi-play"></i> PLAY</button></td>
                                </tr>



                                <tr>
                                    <td>4</td>
                                    <td class="logo-tb"><div class="logo-div"><img src="<?php echo $website_url?>/uploaded_files/exam_pix/ssce.png" alt=""/> </div><span id="">WAEC</span>  </td>
                                    <td>ENGLISH LANGUAGE</td>
                                    <td>NOUN</td>
                                    <td>NOUN PHRASE</td>
                                    <td>2023-08-03 12:25:27</td>
                                    <td>2023-08-03 12:25:27</td>
                                    <td><div class="status-div SUCCESS">ACTIVE</div></td>
                                    <td><button class="btn"><i class="bi bi-play"></i> PLAY</button></td>
                                </tr>




                                <tr>
                                    <td>5</td>
                                    <td class="logo-tb"><div class="logo-div"><img src="<?php echo $website_url?>/uploaded_files/exam_pix/ssce.png" alt=""/> </div><span id="">WAEC</span>  </td>
                                    <td>ENGLISH LANGUAGE</td>
                                    <td>NOUN</td>
                                    <td>NOUN PHRASE</td>
                                    <td>2023-08-03 12:25:27</td>
                                    <td>2023-08-03 12:25:27</td>
                                    <td><div class="status-div SUCCESS">ACTIVE</div></td>
                                    <td><button class="btn"><i class="bi bi-play"></i> PLAY</button></td>
                                </tr>
                            
                            </table>
                            <div class="bottom-count-div">
                            <span>5</span> of <span>20</span>
                            <button class="top-btn bottom-btn" type="button" ><i class="bi bi-eye"></i> View All</button>
                            </div>
                        </div>

                    </div>
       

                    <div class="table-div animated fadeIn" id="search-content">
                        <div class="div-in">
                            <div class="container-title title2"><i class="bi bi-credit-card"></i>  TRANSACTIONS </div>
                            <div class="input-search-div">
                                    <!-- <input id="search_txt" onkeyup="_fetch_users_list()" type="text" class="text_field" placeholder="Type here to search..." title="Type here to search" /> -->
                                    <button type="button" class="top-btn" onClick="_get_page('exam_category', 'exam')"><i class="bi bi-wallet2"></i> Load Wallet</button>
                                </div>
                        <table class="table" cellspacing="0" style="width:100%" >
                            <tr class="tb-col">
                                <td>SN</td>
                                <td>DATE</td>
                                <td>TRANSACTION ID</td>
                                <td>TRANSACTION TYPE</td>
                                <td>TRANSACTION METHOD</td>
                                <td>AMOUNT</td>
                                <td>STATUS</td>
                                <td>ACTION</td>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>2023-08-03 12:25:27</td>
                                <td>TRANS00012384883</td>
                                <td>CREDIT</td>
                                <td>CREDIT/DEBIT CARD</td>
                                <td><span>₦</span> 2,000.00</td>
                                <td><div class="status-div SUCCESS">SUCCESS</div></td>
                                <td><button class="btn"><i class="bi bi-eye"></i> VIEW DETAILS</button></td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>2023-08-03 12:25:27</td>
                                <td>TRANS00012384883</td>
                                <td>CREDIT</td>
                                <td>CREDIT/DEBIT CARD</td>
                                <td><span>₦</span> 2,000.00</td>
                                <td><div class="status-div SUCCESS">SUCCESS</div></td>
                                <td><button class="btn"><i class="bi bi-eye"></i> VIEW DETAILS</button></td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>2023-08-03 12:25:27</td>
                                <td>TRANS00012384883</td>
                                <td>CREDIT</td>
                                <td>CREDIT/DEBIT CARD</td>
                                <td><span>₦</span> 2,000.00</td>
                                <td><div class="status-div SUCCESS">SUCCESS</div></td>
                                <td><button class="btn"><i class="bi bi-eye"></i> VIEW DETAILS</button></td>
                            </tr>

                            <tr>
                                <td>4</td>
                                <td>2023-08-03 12:25:27</td>
                                <td>TRANS00012384883</td>
                                <td>CREDIT</td>
                                <td>CREDIT/DEBIT CARD</td>
                                <td><span>₦</span> 2,000.00</td>
                                <td><div class="status-div SUCCESS">SUCCESS</div></td>
                                <td><button class="btn"><i class="bi bi-eye"></i> VIEW DETAILS</button></td>
                            </tr>

                            <tr>
                                <td>5</td>
                                <td>2023-08-03 12:25:27</td>
                                <td>TRANS00012384883</td>
                                <td>CREDIT</td>
                                <td>CREDIT/DEBIT CARD</td>
                                <td><span>₦</span> 2,000.00</td>
                                <td><div class="status-div SUCCESS">SUCCESS</div></td>
                                <td><button class="btn"><i class="bi bi-eye"></i> VIEW DETAILS</button></td>
                            </tr>

                        
                     </table>
                            <div class="bottom-count-div">
                                <span>5</span> of <span>20</span>
                                <button class="top-btn bottom-btn" type="button" ><i class="bi bi-eye"></i> View All</button>
                            </div>
                    </div>
                </div>

<?php }?>







<?php if ($page=='exam_category'){ ?>

    
    <div class="container-div">
        <div class="div-in">    
             <div class="container-title title2"><i class="bi-pencil-square"></i> EXAM'S LIST</div>
             <div class="input-search-div">
                <input id="search_txt" onkeyup="_fetch_users_list()" type="text" class="text_field" placeholder="Type here to search..." title="Type here to search" />
                <button type="button" class="top-btn" onClick="_get_form('add_more_exam')"> <i class="bi-plus-square"></i> Add More Exam </button>
             </div>
             <br />
             <br />
            <div class="fetch-div animated fadeIn">			
					<div class="record-content-div">
                        <div class="div-in">
                            <div class="image-div">
                                <img src="<?php echo $website_url?>/uploaded_files/exam_pix/ssce.png" alt="topics"/>
                            </div>

                             <div class="text-div">
                                <h2>WAEC</h2>
                                    <p>(WAEC) is an examination board established by law to determine the examinations required in West African countries.</p>
                                <div class="count-div">
                                    <div class="count-in"><i class="bi-book"></i> TOPICS: <span id="">100</span> &nbsp;|&nbsp; <i class="bi-book"></i> SUB-TOPICS: <span id="">100</span> &nbsp;|&nbsp; <i class="bi-book"></i> STATUS: <span class="ACTIVE" id="" >ACTIVE</span></div>
                                   <button class="btn" title="VIEW SUBJECT" onClick="_get_page('subject', 'exam')"><i class="bi-pencil-square"></i> VIEW SUBJECT</button>
                                </div>
                            </div>
                        </div> 
					</div>


                    <div class="record-content-div">
                        <div class="div-in">
                            <div class="image-div">
                                <img src="<?php echo $website_url?>/uploaded_files/exam_pix/neco.png" alt="topics"/>
                            </div>

                             <div class="text-div">
                                <h2>NECO</h2>
                                    <p>(WAEC) is an examination board established by law to determine the examinations required in West African countries.</p>
                                <div class="count-div">
                                    <div class="count-in"><i class="bi-book"></i> TOPICS: <span id="">100</span> &nbsp;|&nbsp; <i class="bi-book"></i> SUB-TOPICS: <span id="">100</span> &nbsp;|&nbsp; <i class="bi-book"></i> STATUS: <span class="ACTIVE" id="" >ACTIVE</span></div>
                                   <button class="btn" title="VIEW SUBJECT" onClick="_get_page('subject', 'exam')"><i class="bi-pencil-square"></i> VIEW SUBJECT</button>
                                </div>
                            </div>
                        </div> 
					</div>




                    <div class="record-content-div">
                        <div class="div-in">
                            <div class="image-div">
                                <img src="<?php echo $website_url?>/uploaded_files/exam_pix/utme.png" alt="topics"/>
                            </div>

                             <div class="text-div">
                                <h2>UTME</h2>
                                    <p>(WAEC) is an examination board established by law to determine the examinations required in West African countries.</p>
                                <div class="count-div">
                                    <div class="count-in"><i class="bi-book"></i> TOPICS: <span id="">100</span> &nbsp;|&nbsp; <i class="bi-book"></i> SUB-TOPICS: <span id="">100</span> &nbsp;|&nbsp; <i class="bi-book"></i> STATUS: <span class="ACTIVE" id="" >ACTIVE</span></div>
                                   <button class="btn" title="VIEW SUBJECT" onClick="_get_page('subject', 'exam')"><i class="bi-pencil-square"></i> VIEW SUBJECT</button>
                                </div>
                            </div>
                        </div> 
					</div>

      

                <!-- <div class="fetch animated fadeIn" id="fetch">
                <script> _get_fetch_all_users('','','');</script>
                </div> -->
    
            </div> 

        </div> 
            
            <br clear="all" />
    </div>

    <script> 
        var search_content =['Type here to search...', 'Exam ID e.g EXM00000','Exam Name e.g WAEC, NECO, JUPEB, JAMB, UTME, PUTME','IJMB'];
        _placeholder(search_txt,search_content);
    </script>
    
<?php } ?>









<?php if ($page=='subject'){ ?>
    <div class="container-div">
        <div class="div-in"> 
            <div class="container-title title2"><i class="bi-book"></i></span> EXAM / <span class="list">WAEC</span> / <span style="color:var(--body-color);">SUBJECT'S LIST</span> </div>
            <div class="input-search-div">
                <input id="search_txt" onkeyup="_fetch_users_list()" type="text" class="text_field full_search" placeholder="Type here to search..." title="Type here to search" />
            </div>
            <br clear="all"/>
            <br clear="all"/>
            
                <div class="fetch-div animated fadeIn">			
                    <div class="grid-div">
                        <div class="div-in">
                            <div class="image-div">
                                <img src="<?php echo $website_url?>/uploaded_files/subject_pix/maths.jpg" alt="maths"/>                        
                            </div>
                            <div class="ACTIVE">ACTIVE</div>
                            <div class="info-div">
                                <h2>MATHEMATICS</h2> 
                                <hr></hr>
                                <div class="count-div"><i class="bi-book"></i> TOPICS: <span id="">100</span> &nbsp;|&nbsp; <i class="bi-book"></i> SUB-TOPICS: <span id="">100</span> </div>
                                <button class="btn" title="EDIT"><i class="bi-pencil-square"></i> EDIT</button>
                                <button class="btn btn2" title="EDIT" onClick="_get_page('topics', 'exam')"><i class="bi-book"></i> VIEW TOPICS</button>
                            </div>     
                        </div>	                          
					</div> 

                    <div class="grid-div">
                        <div class="div-in">
                            <div class="image-div">
                                <img src="<?php echo $website_url?>/uploaded_files/subject_pix/chemistry.jpg" alt="maths"/>                        
                            </div>
                            <div class="ACTIVE">ACTIVE</div>
                            <div class="info-div">
                                <h2>CHEMISTRY</h2> 
                                <hr></hr>
                                <div class="count-div"><i class="bi-book"></i> TOPICS: <span id="">100</span> &nbsp;|&nbsp; <i class="bi-book"></i> SUB-TOPICS: <span id="">100</span> </div>
                                <button class="btn" title="EDIT"><i class="bi-pencil-square"></i> EDIT</button>
                                <button class="btn btn2" title="EDIT" onClick="_get_page('topics', 'exam')"><i class="bi-book"></i> VIEW TOPICS</button>
                            </div>     
                        </div>	                          
					</div> 

                    <div class="grid-div">
                        <div class="div-in">
                            <div class="image-div">
                                <img src="<?php echo $website_url?>/uploaded_files/subject_pix/economics.jpg" alt="maths"/>                        
                            </div>
                            <div class="ACTIVE">ACTIVE</div>
                            <div class="info-div">
                                <h2>ECONOMICS</h2> 
                                <hr></hr>
                                <div class="count-div"><i class="bi-book"></i> TOPICS: <span id="">100</span> &nbsp;|&nbsp; <i class="bi-book"></i> SUB-TOPICS: <span id="">100</span> </div>
                                <button class="btn" title="EDIT"><i class="bi-pencil-square"></i> EDIT</button>
                                <button class="btn btn2" title="EDIT" onClick="_get_page('topics', 'exam')"><i class="bi-book"></i> VIEW TOPICS</button>
                            </div>     
                        </div>	                          
					</div> 



                     <div class="grid-div">
                        <div class="div-in">
                            <div class="image-div">
                                <img src="<?php echo $website_url?>/uploaded_files/subject_pix/economics.jpg" alt="maths"/>                        
                            </div>
                            <div class="ACTIVE">ACTIVE</div>
                            <div class="info-div">
                                <h2>ECONOMICS</h2> 
                                <hr></hr>
                                <div class="count-div"><i class="bi-book"></i> TOPICS: <span id="">100</span> &nbsp;|&nbsp; <i class="bi-book"></i> SUB-TOPICS: <span id="">100</span> </div>
                                <button class="btn" title="EDIT"><i class="bi-pencil-square"></i> EDIT</button>
                                <button class="btn btn2" title="EDIT" onClick="_get_page('topics', 'exam')"><i class="bi-book"></i> VIEW TOPICS</button>
                            </div>     
                        </div>	                          
					</div> 


				</div> 

                <!-- <div class="fetch animated fadeIn" id="fetch">
                <script> _get_fetch_all_users('','','');</script>
                </div> -->
            </div> 
                 <br clear="all" />
        </div>
     <script>
        var search_content = ['Type here to search...', 'Subject ID e.g SUB00000','Subject Name e.g Maths, English, Physics'];
        _placeholder(search_txt,search_content);
    </script>
    
<?php } ?>








<?php if ($page=='topics'){ ?>
    <div class="container-div">
        <div class="div-in"> 
            <div class="container-title title2"><i class="bi-book"></i></span> EXAM / <span class="list">WAEC</span> / <span class="list">MATHEMATICS</span> / <span style="color:var(--body-color);">TOPIC'S LIST</span></div>
            <div class="input-search-div">
                <input id="search_txt" onkeyup="_fetch_users_list()" type="text" class="text_field search_right" placeholder="Type here to search..." title="Type here to search" />
            </div>
            <br clear="all"/>
            <div class="fetch-div animated fadeIn">			
                    
                <div class="faq-back-div " >
                    <div class="faq-text-div ">

                        <div class="quest-faq-div ">
                            <div class="faq-title-text">
                                <h3>NUMBER & NUMERATION </h3>
                            </div>
                            
                            <div class="faq-answer-div" onclick="_collapse('faq1')">
                                <span>Sub Topics: </span>&nbsp;&nbsp;<span class="count-div">83443</span> &nbsp;&nbsp;| &nbsp;
                                <span>Status: </span>&nbsp;&nbsp;<span class="count-div status">ACTIVE</span>
                                <div class="expand-div" id="faq1num">&nbsp;<i class="bi-plus"></i>&nbsp;</div>                         
                            </div>

                            <div class="faq-answer-div" id="faq1answer" style="display: none;">  
                                <div class="topics-content-div">
                                    <div class="image-div">
                                        <img src="<?php echo $website_url?>/all-images/body-pix/geometry.jpg" alt="geometry"/>
                                    </div>

                                    <div class="text">
                                        <h4>Euclidean Geometry</h4>
                                        <p>Euclidean geometry is a study of geometric properties and relationships in two and three-dimensional space.</p>
                                        <button class="btn btn2" title="SUBCRIBE" onclick="_get_form('user_subcription');">SUBCRIBE <i class="bi-box-arrow-in-up-right"></i></button>
                                        <button class="btn" title="PLAY VIDEO" onclick="_get_form('subscription_video');"><i class="bi-play"></i> PLAY VIDEO</button>
                                      <!-- <a href="<?php //echo $website_url?>/user/play-video/"> <button class="btn" title="PLAY VIDEO" ><i class="bi-play"></i> PLAY VIDEO</button></a>  -->
                                        <div class="amount-div">Subcription Fee:&nbsp; ₦ <span id="">2,000.00</span><br>
                                             Due Date :&nbsp; 22023-08-10 12:00:00
                                        </div>
                                    </div>
                                </div>

                                <div class="topics-content-div">
                                     <div class="overlay-div"></div>
                                    <div class="image-div">
                                        <img src="<?php echo $website_url?>/all-images/body-pix/geometry.jpg" alt="geometry"/>
                                    </div>

                                    <div class="text">
                                        <h4>Polynomial</h4>
                                        <p>Euclidean geometry is a study of geometric properties and relationships in two and three-dimensional space.</p>
                                        <button class="btn btn2" title="SUBCRIBE" onclick="_get_form('user_subcription');">SUBCRIBE <i class="bi-box-arrow-in-up-right"></i></button>
                                        <div class="amount-div">Subcription Fee:&nbsp; ₦ <span id="">2,000.00</span> </div>
                                    </div>
                                </div>
                            </div>

                            

                        </div>





                        <div class="quest-faq-div ">
                            <div class="faq-title-text">
                                <h3>STATTISTICS </h3>
                            </div>
                            
                            <div class="faq-answer-div" onclick="_collapse('faq2')">
                                <span>Sub Topics: </span>&nbsp;&nbsp;<span class="count-div">83443</span> &nbsp;&nbsp;| &nbsp;
                                <span>Status: </span>&nbsp;&nbsp;<span class="count-div status">ACTIVE</span>
                                <div class="expand-div" id="faq2num">&nbsp;<i class="bi-plus"></i>&nbsp;</div>                         
                            </div>

                           
                            <div class="faq-answer-div" id="faq2answer" style="display: none;">  
                                <div class="topics-content-div">
                                    <div class="image-div">
                                        <img src="<?php echo $website_url?>/all-images/body-pix/geometry.jpg" alt="geometry"/>
                                    </div>
 
                                    <div class="text">
                                        <h4>Euclidean Geometry</h4>
                                        <p>Euclidean geometry is a study of geometric properties and relationships in two and three-dimensional space.</p>
                                        <button class="btn btn2" title="SUBCRIBE" onclick="_get_form('user_subcription');">SUBCRIBE <i class="bi-box-arrow-in-up-right"></i></button>
                                        <button class="btn" title="PLAY VIDEO"><i class="bi-play"></i> PLAY VIDEO</button>
                                        <div class="amount-div">Subcription Fee:&nbsp; ₦ <span id="">2,000.00</span><br>
                                             Due Date :&nbsp; 22023-08-10 12:00:00
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                      



                    </div>
                </div>

                    
                <!-- <div class="fetch animated fadeIn" id="fetch">
                <script> _get_fetch_all_users('','','');</script>
                </div> -->
            </div> 
        </div> 

        <br clear="all" />
    </div>
     <script>
        var search_content =['Type here to search...', 'Top ID e.g TOP00000','Top Name e.g Statistic, Geometry'];
        _placeholder(search_txt,search_content);
    </script>
    
<?php } ?>





<?php if ($page=='subscription'){?>

<div class="table-div animated fadeIn" id="search-content">
    <div class="div-in">
            <div class="container-title title2"><i class="bi-pencil-square"></i>  EXAM SUBCRIPTION </div>
            <div class="input-search-div">
                <input id="search_txt" onkeyup="_fetch_users_list()" type="text" class="text_field" placeholder="Type here to search..." title="Type here to search" />
                <button type="button" class="top-btn" onClick="_get_page('exam_category', 'exam')">Subcribe <i class="bi bi-box-arrow-in-up-right"></i></button>
            </div>
     
            <table class="table" cellspacing="0" style="width:100%" >
                <tr class="tb-col">
                    <td>SN</td>
                    <td>EXAM</td>
                    <td>SUBJECT</td>
                    <td>TOPIC</td>
                    <td>SUB-TOPIC</td>
                    <td>DATE</td>
                    <td>DUE DATE</td>
                    <td>STATUS</td>
                    <td>ACTION</td>
                </tr>

                <tr>
                    <td>1</td>
                    <td class="logo-tb"><div class="logo-div"><img src="<?php echo $website_url?>/uploaded_files/exam_pix/ssce.png" alt=""/> </div><span id="">WAEC</span>  </td>
                    <td>ENGLISH LANGUAGE</td>
                    <td>NOUN</td>
                    <td>NOUN PHRASE</td>
                    <td>2023-08-03 12:25:27</td>
                    <td>2023-08-03 12:25:27</td>
                    <td><div class="status-div SUCCESS">ACTIVE</div></td>
                    <td><button class="btn"><i class="bi bi-play"></i> PLAY</button></td>
                </tr>

                <tr>
                    <td>2</td>
                    <td class="logo-tb"><div class="logo-div"><img src="<?php echo $website_url?>/uploaded_files/exam_pix/ssce.png" alt=""/> </div><span id="">WAEC</span>  </td>
                    <td>ENGLISH LANGUAGE</td>
                    <td>NOUN</td>
                    <td>NOUN PHRASE</td>
                    <td>2023-08-03 12:25:27</td>
                    <td>2023-08-03 12:25:27</td>
                    <td><div class="status-div SUCCESS">ACTIVE</div></td>
                    <td><button class="btn"><i class="bi bi-play"></i> PLAY</button></td>
                </tr>

                <tr>
                    <td>3</td>
                    <td class="logo-tb"><div class="logo-div"><img src="<?php echo $website_url?>/uploaded_files/exam_pix/ssce.png" alt=""/> </div><span id="">WAEC</span>  </td>
                    <td>ENGLISH LANGUAGE</td>
                    <td>NOUN</td>
                    <td>NOUN PHRASE</td>
                    <td>2023-08-03 12:25:27</td>
                    <td>2023-08-03 12:25:27</td>
                    <td><div class="status-div SUCCESS">ACTIVE</div></td>
                    <td><button class="btn"><i class="bi bi-play"></i> PLAY</button></td>
                </tr>



                <tr>
                    <td>4</td>
                    <td class="logo-tb"><div class="logo-div"><img src="<?php echo $website_url?>/uploaded_files/exam_pix/ssce.png" alt=""/> </div><span id="">WAEC</span>  </td>
                    <td>ENGLISH LANGUAGE</td>
                    <td>NOUN</td>
                    <td>NOUN PHRASE</td>
                    <td>2023-08-03 12:25:27</td>
                    <td>2023-08-03 12:25:27</td>
                    <td><div class="status-div SUCCESS">ACTIVE</div></td>
                    <td><button class="btn"><i class="bi bi-play"></i> PLAY</button></td>
                </tr>




                <tr>
                    <td>5</td>
                    <td class="logo-tb"><div class="logo-div"><img src="<?php echo $website_url?>/uploaded_files/exam_pix/ssce.png" alt=""/> </div><span id="">WAEC</span>  </td>
                    <td>ENGLISH LANGUAGE</td>
                    <td>NOUN</td>
                    <td>NOUN PHRASE</td>
                    <td>2023-08-03 12:25:27</td>
                    <td>2023-08-03 12:25:27</td>
                    <td><div class="status-div SUCCESS">ACTIVE</div></td>
                    <td><button class="btn"><i class="bi bi-play"></i> PLAY</button></td>
                </tr>
            
            </table>
            <div class="bottom-count-div">
                <span>5</span> of <span>20</span>
                <button class="top-btn bottom-btn" type="button" ><i class="bi bi-eye"></i> View More</button>
            </div>
    </div>

</div>

<script> 
	var search_content =['Type here to search...', 'Exam ID e.g EXM00000','Exam Name e.g WAEC, NECO, JUPEB, JAMB, UTME, PUTME','IJMB'];
    _placeholder(search_txt,search_content);
</script>

<?php }?>









<?php if ($page=='transactions'){?>

<div class="table-div animated fadeIn" id="search-content"> 
    <div class="div-in">
            <div class="container-title title2"><i class="bi bi-credit-card"></i>  TRANSACTIONS </div>
                    <div class="input-search-div">
                        <input id="search_txt" onkeyup="_fetch_users_list()" type="text" class="text_field" placeholder="Type here to search..." title="Type here to search" />
                        <button type="button" class="top-btn" onClick="_get_form('load_user_wallet','load_wallet')"><i class="bi bi-wallet2"  ></i> Load Wallet</button>
                    </div>
                    <table class="table" cellspacing="0" style="width:100%" >
                        <tr class="tb-col">
                            <td>SN</td>
                            <td>DATE</td>
                            <td>TRANSACTION ID</td>
                            <td>TRANSACTION TYPE</td>
                            <td>TRANSACTION METHOD</td>
                            <td>AMOUNT</td>
                            <td>STATUS</td>
                            <td>ACTION</td>
                        </tr>

                        <tr>
                            <td>1</td>
                            <td>2023-08-03 12:25:27</td>
                            <td>TRANS00012384883</td>
                            <td>CREDIT</td>
                            <td>CREDIT/DEBIT CARD</td>
                            <td><span>₦</span> 2,000.00</td>
                            <td><div class="status-div SUCCESS">SUCCESS</div></td>
                            <td><button class="btn"><i class="bi bi-eye"></i> VIEW DETAILS</button></td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>2023-08-03 12:25:27</td>
                            <td>TRANS00012384883</td>
                            <td>CREDIT</td>
                            <td>CREDIT/DEBIT CARD</td>
                            <td><span>₦</span> 2,000.00</td>
                            <td><div class="status-div SUCCESS">SUCCESS</div></td>
                            <td><button class="btn"><i class="bi bi-eye"></i> VIEW DETAILS</button></td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>2023-08-03 12:25:27</td>
                            <td>TRANS00012384883</td>
                            <td>CREDIT</td>
                            <td>CREDIT/DEBIT CARD</td>
                            <td><span>₦</span> 2,000.00</td>
                            <td><div class="status-div SUCCESS">SUCCESS</div></td>
                            <td><button class="btn"><i class="bi bi-eye"></i> VIEW DETAILS</button></td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>2023-08-03 12:25:27</td>
                            <td>TRANS00012384883</td>
                            <td>CREDIT</td>
                            <td>CREDIT/DEBIT CARD</td>
                            <td><span>₦</span> 2,000.00</td>
                            <td><div class="status-div SUCCESS">SUCCESS</div></td>
                            <td><button class="btn"><i class="bi bi-eye"></i> VIEW DETAILS</button></td>
                        </tr>

                        <tr>
                            <td>5</td>
                            <td>2023-08-03 12:25:27</td>
                            <td>TRANS00012384883</td>
                            <td>CREDIT</td>
                            <td>CREDIT/DEBIT CARD</td>
                            <td><span>₦</span> 2,000.00</td>
                            <td><div class="status-div SUCCESS">SUCCESS</div></td>
                            <td><button class="btn"><i class="bi bi-eye"></i> VIEW DETAILS</button></td>
                        </tr>

                    
                </table>
            <div class="bottom-count-div">
                <span>5</span> of <span>20</span>
                <button class="top-btn bottom-btn" type="button" ><i class="bi bi-eye"></i> View More</button>
            </div>
    </div>
</div>

    <script> 
        var search_content =['Type here to search...', 'Exam ID e.g EXM00000','Exam Name e.g WAEC, NECO, JUPEB, JAMB, UTME, PUTME','IJMB'];
        _placeholder(search_txt,search_content);
    </script>
<?php }?>













<?php if ($page=='user_profile'){?>

<div class="table-div animated fadeIn" id="search-content"> 
    <div class="div-in">
            <div class="container-title title2"><i class="bi bi-person-square"></i> MY ROFILE </div>
                 <br clear="all"/>
            <div class="user-account-div">
                <div class="profile-div">
                    <label>
                    <div class="profile-pix"><img src="<?php echo $website_url?>/uploaded_files/user_pix/friends.png" id="passportimg3"/></div>
                        <input type="file" id="passport" accept=".jpg"  onchange="Test.UpdatePreview(this);" style="display:none;"/>
                    </label>				
                </div>
             

                <div class="profile-div info-div">
                    <div class="title"> FULLNAME: <span>*</span></div>
                        <input id="fullname" type="text" class="text_field" placeholder="FULLNAME" title="FULLNAME" value="<?php echo $fullname; ?>"/>
                    <div class="title"> EMAIL ADDRESS: <span>*</span></div>
                        <input id="email" type="text" class="text_field" placeholder="EMAIL ADDRESS" title="EMAIL ADDRESS" value="<?php echo $email; ?>"/>
                    <div class="title"> PHONE NUMBER: <span>*</span></div>
                        <input id="phone" type="text" class="text_field" placeholder="PHONE NUMBER" title="PHONE NUMBER" value="<?php echo $mobile; ?>"/>
                       
                        <button class="action-btn" type="button" id="update-user-btn" onclick="_update_user_profile('<?php echo $users_id; ?>');"><i class="bi-check"></i> UPDATE PROFILE</button>
                 </div>
         
                            
        
              
            </div>
    </div>
</div>

    <script> 
        var search_content =['Type here to search...', 'Exam ID e.g EXM00000','Exam Name e.g WAEC, NECO, JUPEB, JAMB, UTME, PUTME','IJMB'];
        _placeholder(search_txt,search_content);
    </script>
<?php }?>





















<script type="text/javascript" src="js/scrollBar.js"></script>
<script type="text/javascript">
$(".sb-container").scrollBox();
</script>
  
    <script src="js/aos.js"></script>
    <script>
      AOS.init({
        easing: 'ease-in-out-sine'
      });
    </script>
