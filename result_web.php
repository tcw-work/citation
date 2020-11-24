
       
    
    
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


//if($citation_date=='')
//{
//    print 'nd';
//}

//
//
//if(isset($_POST['media']))
//{
//    $citation_auther=$_POST['auther'];
//    $citation_date=$_POST['date'];
//    $citation_name=$_POST['name'];  
//    $tool_open = '(';
//    $tool_close = ')';
//    
//    if($citation_date=='')
//    {
//        $citation_date = '(発行日不明)';
//        $tool_open = '';
//        $tool_close = '';
//    }
//    
//    if($_POST['media']==='1')
//    {
////        webを選択したときに出版社（undefiend index）が出るのを防ぐ
//        $citation_publisher=$_POST['publisher'];
//        if($citation_auther=='')
//        {
//            $citation_auther = 'nd';
//        }
//        if(isset($citation_date)==true)
//        {
////            $tool_open = '(';
////            $tool_close = ')';
//        }
//        
//        if($citation_name=='')
//        {
//            $citation_name = 'nd';
//        }
//        if($citation_publisher=='')
//        {
//            $citation_publisher = 'nd';
//        }
//        
//        print $citation_auther;
//        print ' ';
//        print $tool_open;
//        print $citation_date;
//        print $tool_close;
//        print ' ';
//        print $citation_name;
//        print ' ';
//        print $citation_publisher;
//    }
//    else
//    {
//        if($_POST['media']==='1-2')
//        {
//            $citation_auther02=$_POST['auther02'];
//            $citation_auther03=$_POST['auther03'];
//            $citation_publisher=$_POST['publisher'];
//            
//            $tool_space01='・';
//            $tool_space02='・';
//            
//            if(isset ($_POST['auther02']))
//            {
//                $tool_space01='・';
//            }
//            if(isset ($_POST['auther03']))
//            {
//                $tool_space02='・';
//            }
//            if(empty ($_POST['auther']))
//            {
//                $tool_space01='';
//            }
//            if(empty ($_POST['auther02']))
//            {
//                $tool_space01='';
//            }
//            if(empty ($_POST['auther']) && empty ($_POST['auther02']))
//            {
//                $tool_space01='';
//                $tool_space02='';
//            }
//            if(empty ($_POST['auther03']))
//            {
//                $tool_space02='';
//            }
//            
//            print $citation_auther;
//            print $tool_space01;
//            print $citation_auther02;
//            print $tool_space02;
//            print $citation_auther03;
//            print ' ';
//            print $tool_open;
//            print $citation_date;
//            print $tool_close;
//            print ' ';
//            print $citation_name;
//            print ' ';
//            print $citation_publisher;
//        }
//        else
//        {
//            if($_POST['media']==='1-3')
//            {
//                $citation_publisher=$_POST['publisher'];
//                $citation_translator=$_POST['translator'];
//
//                if($citation_translator=='')
//                {
//                    $tool_open = '';
//                    $tool_close = '';
//                }
//                
//                print $citation_auther;
//                print ' ';
//                print $tool_open;
//                print $citation_date;
//                print $tool_close;
//                print ' ';
//                print $citation_name;
//                print ' ';
//                print $tool_open;
//                print $citation_translator;
//                print $tool_close;
//                print ' ';
//                print $citation_publisher;
//            }
//            else
//            {
//                if($_POST['media']==='1-4')
//                {
//                    $citation_publisher=$_POST['publisher'];
//                    
////                    論文名とページ
//                    $citation_thesis=$_POST['thesis'];
//                    $citation_page=$_POST['page'];
//
//                    if($citation_thesis=='')
//                    {
//                        $citation_thesis = '';
//                    }
//                    //
//
//                    if($citation_page=='')
//                    {
//                        $citation_page = '';
//                    }
//                    print $citation_auther;
//                    print ' ';
//                    print $tool_open;
//                    print $citation_date;
//                    print $tool_close;
//                    print ' ';
//                    print $citation_name;
//                    print ' ';
//                    print $citation_thesis;
//                    print ' ';
//                    print 'P.';
//                    print $citation_page;
//                    print ' ';
//                    print $citation_publisher;
//                    print ' ';
//
//                }
//            }
//        }
//    }
//    
//
//    
////    else
////    {
//        
////        if($_POST['media']==='2-1')
////        {
////            print 'aaa';
////        }
////        else
////        {
////            
////        }
////    }
//    
////    else
////    {
////        if(empty($citation_auther) ){  
////            echo '変数「$var」は0あるいは空です';  
////        }
////    }
//}
//else
//{
//    print '媒体を選択してください。';
//}
//




if(isset($_POST['media']))
{
    $citation_auther=$_POST['auther'];
    $citation_date=$_POST['date'];
    $citation_name=$_POST['name'];
    $citation_url=$_POST['url'];
    $citation_access=$_POST['access'];
    $citation_p_title=$_POST['p_title'];
    $tool_comma = ',';
    $tool_period = '.';
    $tool_site_period = '.';

    $tool_open = '(';
    $tool_close = ')';
    
    $tool_open_access = '(';
    $tool_close_access = ')';
    
    $tool_bracket_open = '『';
    $tool_bracket_close = '』';
    $tool_s_bracket_open = '「';
    $tool_s_bracket_close = '」';
    
    $tool_eturan = '閲覧日:';
    
    if($citation_date=='')
    {
        $tool_open = '';
        $tool_close = '';
    }
    
    if($citation_p_title=='')
    {
        $citation_p_title = '';
    }
    
    
    if($citation_name=='')
    {
        $tool_s_bracket_open = '';
        $tool_s_bracket_close = '';
    }
    if($citation_url=='')
    {
        $tool_comma = '';
    }
    if($citation_p_title=='')
    {
        $tool_bracket_open = '';
        $tool_bracket_close = '';
    }
    if($citation_access=='')
    {
        $tool_eturan = '';
        $tool_eturan = '';
        $tool_open_access = '(';
        $tool_close_access = ')';
    }
    if($citation_name=='' && $citation_p_title=='')
    {
        $tool_period = '';    
    }
    if($citation_access=='')
    {
        $tool_open_access = '';
        $tool_close_access = '';
        $tool_comma = '';
    }
    
//    if($citation_date=='')
//    {
//        $citation_date = '(発行日不明)';
//        $tool_open = '';
//        $tool_close = '';
//    }
    
    if(empty ($_POST['auther']) && empty ($_POST['date']))
    {
        print $tool_bracket_open;
        print $citation_p_title;
        print $tool_bracket_close;
        
        print $tool_s_bracket_open;
        print $citation_name;
        print $tool_s_bracket_close;
//        print $tool_period;
        print ' ';
        print '(';
        print '発行年不明';
        print ').';
        print ' ';
        print $citation_url;
        print $tool_comma;
        print ' ';
        print $tool_open_access;
        print $tool_eturan;
        print $citation_access;
        print $tool_close_access;
    }


    else
    {
        if(empty($citation_auther) ){
            print $tool_bracket_open;
            print $citation_p_title;
            print $tool_bracket_close;

            print $tool_s_bracket_open;
            print $citation_name;
            print $tool_s_bracket_close;
//            print $tool_period;
            print ' ';
            print $tool_open;
            print $citation_date;
            print $tool_close;
            print $tool_period;
            print ' ';
            print $citation_url;
            print $tool_comma;
            print ' ';
            print $tool_open_access;
            print $tool_eturan;
            print $citation_access;
            print $tool_close_access;
        }
        else
        {
            //                if(empty($citation_date) )

            if(isset ($_POST['auther']) && empty ($_POST['date']))
            {
                $citation_url=$_POST['url'];
                $citation_access=$_POST['access'];

                print $citation_auther;
                print ' ';
                print '(';
                print '発行年不明';
                print ').';
                print ' ';
                print $tool_bracket_open;
                print $citation_p_title;
                print $tool_bracket_close;

                print $tool_s_bracket_open;
                print $citation_name;
                print $tool_s_bracket_close;
                print $tool_period;
                print ' ';
                print $citation_url;
                print $tool_comma;
                print ' ';
                print $tool_open_access;
                print $tool_eturan;
                print $citation_access;
                print $tool_close_access;
            }
            else
            {
                if(isset($_POST['auther']) && ($_POST['media']==='2'))
                {
                    print $citation_auther;
                    print ' ';
                    print $tool_open;
                    print $citation_date;
                    print $tool_close;
                    print $tool_site_period;
                    print ' ';
                    print $tool_s_bracket_open;
                    print $citation_name;
                    print $tool_s_bracket_close;
                    print $tool_period;
                    print ' ';
                    print $citation_url;
                    print $tool_comma;
                    print ' ';
                    print $tool_open_access;
                    print $tool_eturan;
                    print $citation_access;
                    print $tool_close_access;
//                    print ' ';
//                    print $citation_p_title;
                }
                else
                {
                    if($_POST['media']==='2-1')
                    {
//                        if(empty ($_POST['p_title;']))
//                        {
//                            print "必須項目が入力されていません"; 
//                        }
                        if(empty ($_POST['p_title']) && empty ($_POST['citation_name']))
                        {
                            $tool_site_period='';
                        }
                        
                        print $citation_auther;
                        print ' ';
                        print $tool_open;
                        print $citation_date;
                        print $tool_close;
                        print $tool_site_period;
                        print ' ';
                        print $tool_bracket_open;
                        print $citation_p_title;
                        print $tool_bracket_close;
                        
                        print $tool_s_bracket_open;
                        print $citation_name;
                        print $tool_s_bracket_close;
                        print $tool_period;
                        print ' ';
                        print $citation_url;
                        print $tool_comma;
                        print ' ';
                        print $tool_open_access;
                        print $tool_eturan;
                        print $citation_access;
                        print $tool_close_access;
                    }
                    else
                    {
                        if($_POST['media']==='2-2')
                        {
                            if(empty ($_POST['p_title']) && empty ($_POST['citation_name']))
                            {
                                $tool_site_period='';
                            }

                            $citation_auther02=$_POST['auther02'];
                            $citation_auther03=$_POST['auther03'];
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

                            print $citation_auther;
                            print $tool_space01;
                            print $citation_auther02;
                            print $tool_space02;
                            print $citation_auther03;
                            print ' ';
                            print $tool_open;
                            print $citation_date;
                            print $tool_close;
                            print $tool_site_period;
                            print ' ';
                            print $tool_bracket_open;
                            print $citation_p_title;
                            print $tool_bracket_close;

                            print $tool_s_bracket_open;
                            print $citation_name;
                            print $tool_s_bracket_close;
                            print $tool_period;
                            print ' ';
                            print $citation_url;
                            print $tool_comma;
                            print ' ';
                            print $tool_open_access;
                            print $tool_eturan;
                            print $citation_access;
                            print $tool_close_access;
                        }
                        else 
                        {
                            if($_POST['media']==='2-3')
                            {
                                $citation_a_title=$_POST['a_title'];
                                $citation_volume=$_POST['volume'];
                                $citation_issue=$_POST['issue'];
                                $citation_page_start=$_POST['page_start'];
                                $citation_page_end=$_POST['page_end'];
                                
                                $citation_page_number = 'p.';
                                $citation_page_hyphen = '-';
                                
                                $tool_period_01 = '.';
                                $tool_period_02 = '.';
                                $tool_period_03 = '.';
                                $tool_period_04 = '.';
                                $tool_period_05 = '.';
                                
//                                著者名(出版年) .「論文名」.誌名.『掲載メディア』. 巻数（号数）. p.始めのページ － 終りのページ.　URL, (ｱｸｾｽ日)
                                
                                print $citation_auther;
                                print ' ';
                                print $tool_open;
                                print $citation_date;
                                print $tool_close;
                                print $tool_site_period;
                                print ' ';
                                
                                print $tool_bracket_open;
                                print $citation_p_title;
                                print $tool_bracket_close;
                                print $tool_period_01;
                                
                                print $citation_a_title;
                                print $tool_period_02;
                                
                                print $tool_s_bracket_open;
                                print $citation_name;
                                print $tool_s_bracket_close;
                                print $tool_period_03;
                                print ' ';
                                
                                print $citation_volume;
                                print $citation_issue;
                                print $tool_period_04;
                                print ' ';
                                
                                print $citation_page_number;
                                print $citation_page_start;
                                print $citation_page_hyphen;
                                print $citation_page_end;
                                print $tool_period_05;
                                print ' ';
                                
                                print $citation_url;
                                print $tool_comma;
                                print ' ';
                                print $tool_open_access;
                                print $tool_eturan;
                                print $citation_access;
                                print $tool_close_access;
                            }
                        }
                    }
                }

            }   
        }
    }
    
    
    
}

//空の時に出るアラート
//    if( empty($citation_thesis) ){  
//        echo '変数「$var」は0あるいは空です';  
//    }

?>

<!--



<br>-->
