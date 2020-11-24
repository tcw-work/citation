<?php
//if($citation_auther=='' || $citation_date=='' || $citation_name=='' || $citation_publisher=='')
//{
//   $citation_auther = 'nd';
//   $citation_date = 'nd';
//   $citation_name = 'nd';
//   $citation_publisher = 'nd';
//}

//if(empty($citation_thesis)) $citation_thesis = "";　　　// 空だった場合は値を持たない
//

if (!empty($citation_thesis)) {
    echo "中身は入っています";
    } else {
//    echo "空です";
    null;
    }





//$select_book=$_POST['book'];
//$select_web=$_POST['web_article'];
//$select_article=$_POST['video'];
            
?>
<?php
if(isset($_POST['media']))
{
    $citation_auther=$_POST['auther'];
    $citation_date=$_POST['date'];
    $citation_name=$_POST['name'];  
    $tool_open = '(';
    $tool_close = ')';
    $citation_comma=',';
    $tool_bracket_open = '『';
    $tool_bracket_close = '』';
    $tool_s_bracket_open = '「';
    $tool_s_bracket_close = '」';
    $tool_haihun = '-';
    
    if($citation_date=='')
    {
        $citation_date = '(発行日不明)';
        $tool_open = '';
        $tool_close = '';
    }
    
    if($citation_name=='')
    {
        $tool_bracket_open = '';
        $tool_bracket_close = '';
    }
    
    if($_POST['media']==='1')
    {
//        webを選択したときに出版社（undefiend index）が出るのを防ぐ
        $citation_publisher=$_POST['publisher'];
        
        if(empty ($_POST['auther']))
        {
            print $tool_bracket_open;
            print $citation_name;
            print $tool_bracket_close;
            print ' ';
            print $tool_open;
            print $citation_date;
            print $tool_close;
            print ' ';
            print $citation_publisher;

        }
        else if(isset ($_POST['auther'])) {
            print $citation_auther;
            print ' ';
            print $tool_open;
            print $citation_date;
            print $tool_close;
            print ' ';
            print $tool_bracket_open;
            print $citation_name;
            print $tool_bracket_close;
            print ' ';
            print $citation_publisher;
        }      
        if(isset($citation_date)==true)
        {
//            $tool_open = '(';
//            $tool_close = ')';
        }
        

    }
    else
    {
        if($_POST['media']==='1-2')
        {
            $citation_auther02=$_POST['auther02'];
            $citation_auther03=$_POST['auther03'];
            $citation_publisher=$_POST['publisher'];
            
            $tool_space01='・';
            $tool_space02='・';
            
            if(isset ($_POST['auther02']))
            {
                $tool_space01='・';
            }
            if(isset ($_POST['auther03']))
            {
                $tool_space02='・';
            }
            if(empty ($_POST['auther']))
            {
                $tool_space01='';
            }
            if(empty ($_POST['auther02']))
            {
                $tool_space01='';
            }
            if(empty ($_POST['auther']) && empty ($_POST['auther02']))
            {
                $tool_space01='';
                $tool_space02='';
            }
            if(empty ($_POST['auther03']))
            {
                $tool_space02='';
            }
            
            if(empty ($_POST['auther']) && empty ($_POST['auther02']) && empty ($_POST['auther03']))
            {
                print $tool_bracket_open;
                print $citation_name;
                print $tool_bracket_close;
                print ' ';
                print $tool_open;
                print $citation_date;
                print $tool_close;
                print ' ';
                print $citation_publisher;
            }
            
            else if (isset ($_POST['auther']) && isset ($_POST['auther02']) && isset ($_POST['auther03']))
            {
            print $citation_auther;
            print $tool_space01;
            print $citation_auther02;
            print $tool_space02;
            print $citation_auther03;
            print ' ';
            print $tool_open;
            print $citation_date;
            print $tool_close;
            print ' ';
            print $tool_bracket_open;
            print $citation_name;
            print $tool_bracket_close;
            print ' ';
            print $citation_publisher;
            }
            
            
            
        }
        else
        {
            if($_POST['media']==='1-3')
            {
                $citation_publisher=$_POST['publisher'];
                $citation_translator=$_POST['translator'];
                
                $citation_yaku='訳';

                if($citation_translator=='')
                {
                    $tool_open = '';
                    $tool_close = '';
                    $citation_yaku = '';
                }
                
                if(empty ($_POST['auther'])) 
                {
                    print $tool_bracket_open;
                    print $citation_name;
                    print $tool_bracket_close;
                    print ' ';
                    print $tool_open;
                    print $citation_date;
                    print $tool_close;
                    print ' ';
                    print $citation_translator;
                    print $citation_yaku;
                    print ' ';
                    print $citation_publisher;   
                }
                else if (isset ($_POST['auther']))
                {
                    print $citation_auther;
                    print ' ';
                    print $tool_open;
                    print $citation_date;
                    print $tool_close;
                    print ' ';
                    print $tool_bracket_open;
                    print $citation_name;
                    print $tool_bracket_close;
                    print ' ';
                    print $citation_translator;
                    print $citation_yaku;
                    print ' ';
                    print $citation_publisher; 
                }
                
            }
            else
            {
                if($_POST['media']==='1-4')
                {
                    $citation_publisher=$_POST['publisher'];
                    
//                    論文名とページ
                    $citation_thesis=$_POST['thesis'];
                    $citation_page=$_POST['page'];
//                    $citation_editor=$_POST['editor'];
                    $citation_page_number = 'p';

                    if($citation_thesis=='')
                    {
                        $citation_thesis = '';
                    }
                    //

                    if($citation_page=='')
                    {
                        $citation_page = '';
                        $citation_page_number = '';
                    }
                    
                    if($citation_thesis=='')
                    {
                        $tool_s_bracket_open = '';
                        $tool_s_bracket_close = '';
                    }
                    
                    if(empty ($_POST['auther'])) 
                    {
                        print $tool_bracket_open;
                        print $citation_name;
                        print $tool_bracket_close;
                        print ' ';
                        print $tool_open;
                        print $citation_date;
                        print $tool_close;
                        print ' ';
                        print $tool_s_bracket_open;
                        print $citation_thesis;
                        print $tool_s_bracket_close;
                        print ' ';
                        print $citation_page_number;
                        print $citation_page;
                        print ' ';
                        print $citation_publisher;
                        print ' ';
                    }
                    else if(isset ($_POST['auther'])) 
                    {
                        print $citation_auther;
                        print ' ';
                        print $tool_open;
                        print $citation_date;
                        print $tool_close;
                        print ' ';
                        print $tool_bracket_open;
                        print $citation_name;
                        print $tool_bracket_close;
                        print ' ';
                        print $tool_s_bracket_open;
                        print $citation_thesis;
                        print $tool_s_bracket_close;
                        print ' ';
                        print $citation_page_number;
                        print $citation_page;
                        print ' ';
                        print $citation_publisher;
                        print ' ';
                    }

                }

                    else
                    {
                        if($_POST['media']==='1-5')
                        {
                            $citation_editor=$_POST['editor'];
                            $citation_publisher=$_POST['publisher'];
                            $citation_thesis=$_POST['thesis'];
                            $citation_page=$_POST['page'];
                            $citation_page_02=$_POST['page_02'];
                            $citation_page_number = 'p';
                            
                            $citation_editor_mark = '編';
                            
                            if($citation_page=='')
                            {
                                $citation_page = '';
                                $citation_comma = '';
                                $citation_page_number = '';
                                $tool_haihun = '';
                                $citation_page_02 = '';
                            }
                            if($citation_page_02=='')
                            {
                                $citation_page_02 = '';
                                $tool_haihun = '';
                            }
                            if($citation_editor=='')
                            {
                                $citation_editor_mark = '';
                            }
                            if($citation_thesis=='')
                            {
                                $tool_s_bracket_open = '';
                                $tool_s_bracket_close = '';
                            }
                            
                            if(empty ($_POST['auther'])) 
                            {
                                print $tool_bracket_open;
                                print $citation_name;
                                print $tool_bracket_close;
                                print ' ';
                                print $citation_editor;
                                print $citation_editor_mark;
                                print ' ';
                                print $tool_s_bracket_open;
                                print $citation_thesis;
                                print $tool_s_bracket_close;
                                print ' ';
                                print $tool_open;
                                print $citation_date;
                                print $tool_close;
                                print ' ';
                                print $citation_page_number;
                                print $citation_page;
                                print $tool_haihun;
                                print $citation_page_02;
                                print ' ';
                                print $citation_publisher;
                                print ' ';
                            }
                            else if(isset ($_POST['auther'])) 
                            {
                                print $citation_auther;
                                print ' ';
                                print $tool_open;
                                print $citation_date;
                                print $tool_close;
                                print ' ';
                                print $tool_bracket_open;
                                print $citation_name;
                                print $tool_bracket_close;
                                print ' ';
                                print $citation_editor;
                                print $citation_editor_mark;
                                print ' ';
                                print $tool_s_bracket_open;
                                print $citation_thesis;
                                print $tool_s_bracket_close;
                                print ' ';
                                print $citation_page_number;
                                print $citation_page;
                                print $tool_haihun;
                                print $citation_page_02;
                                print ' ';
                                print $citation_publisher;
                                print ' ';
                            }

                        }
                    }
            }
        }
    }
    

    
//    else
//    {
        
//        if($_POST['media']==='2-1')
//        {
//            print 'aaa';
//        }
//        else
//        {
//            
//        }
//    }
    
//    else
//    {
//        if(empty($citation_auther) ){  
//            echo '変数「$var」は0あるいは空です';  
//        }
//    }
}
else
{
    print '媒体を選択してください。';
}




//
//if(isset($_POST['media']))
//{
//    
//if($_POST['media']==='2')
//{
//    $citation_url=$_POST['url'];
//    $citation_access=$_POST['access'];
//
//    $tool_open = '(';
//    $tool_close = ')';
//
//    if($citation_date=='')
//    {
//        $tool_open = '';
//        $tool_close = '';
//    }
//    //        if($citation_auther=='' && $citation_date=='')
//    //        {
//    //            $tool_open = '';
//    //            $tool_close = '';
//    //        }
//
//    if(empty ($_POST['auther']) && empty ($_POST['date']))
//    {
//        print $citation_name;
//        print ' ';
//        print '(';
//        print '発行年不明';
//        print ').';
//        print ' ';
//        print $citation_url;
//        print ' ';
//        print $citation_access;
//    }
//}
//
//    else
//    {
//        if(empty($citation_auther) ){
//            print $citation_name;
//            print ' ';
//            print $tool_open;
//            print $citation_date;
//            print $tool_close;
//            print ' ';
//            print $citation_url;
//            print ' ';
//            print $citation_access;
//
//        }
//        else
//        {
//            //                if(empty($citation_date) )
//
//            if(isset ($_POST['auther']) && empty ($_POST['date']))
//            {
//                $citation_url=$_POST['url'];
//                $citation_access=$_POST['access'];
//                
//                print $citation_auther;
//                print ' ';
//                print '(';
//                print '発行年不明';
//                print ').';
//                print ' ';
//                print $citation_name;
//                print ' ';
//                print $citation_url;
//                print ' ';
//                print $citation_access;
//            }
//            else
//            {
//                if(isset($_POST['auther']))
//                {
//                    print $citation_auther;
//                    print ' ';
//                    print $tool_open;
//                    print $citation_date;
//                    print $tool_close;
//                    print ' ';
//                    print $citation_name;
//                    print ' ';
//                    print $citation_url;
//                    print ' ';
//                    print $citation_access;
//                }
//                else
//                {
//                    if($_POST['media']==='2-1')
//                    {
//                        $citation_p_title=$_POST['p_title'];
//
//                        print $citation_auther;
//                        print ' ';
//                        print $tool_open;
//                        print $citation_date;
//                        print $tool_close;
//                        print ' ';
//                        print $citation_name;
//                        print ' ';
//                        print $citation_url;
//                        print ' ';
//                        print $citation_access;
//                        print ' ';
//                        print $citation_p_title;
//                    }
//                }
//            }
//        }
//    }
//}

//空の時に出るアラート
//    if( empty($citation_thesis) ){  
//        echo '変数「$var」は0あるいは空です';  
//    }

?>