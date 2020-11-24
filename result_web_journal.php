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
            
?>




<?php
if(isset($_POST['media']))
{
    $citation_auther=$_POST['auther'];
    $citation_date=$_POST['date'];
    $citation_name=$_POST['name'];
    $citation_url=$_POST['url'];
    $citation_access=$_POST['access'];
    $citation_p_title=$_POST['p_title'];
    
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
    $tool_period_04 = '.';
    $tool_period_05 = '.';
    
    $tool_period_06 = '.';
    
    $tool_period_07 = '.';
    
    $tool_period_date = '.';
    
    $tool_open_issue = '(';
    $tool_close_issue = ')';
    
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
        $tool_period_07 = '';
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
    
    if($citation_volume=='')
    {
        $citation_volume = '';
        $tool_period_06 = '';
        $tool_open_issue = '';
        $tool_close_issue = '';
    }
    if($citation_issue=='')
    {
        $citation_issue = '';
        $tool_open_issue = '';
        $tool_close_issue = '';
        $tool_period_04 = '';
    }
    
    if($citation_page_start=='')
    {
        $citation_page_start = '';
        $citation_page_hyphen = '';
    }

    if($citation_page_end=='')
    {
        $citation_page_end = '';
        $citation_page_hyphen = '';
    }
    
    if($citation_page_start=='' && $citation_page_end=='')
    {
        $citation_page_number = '';
        $citation_page_start = '';
        $citation_page_hyphen = '';
        $citation_page_end = '';
        $tool_period_05 = '';
    }
    if($citation_access=='')
    {
        $tool_open_access = '';
        $tool_close_access = '';
        $tool_comma = '';
    }
    if($citation_a_title=='')
    {
        $citation_a_title = '';
        $tool_period_02 = '';
    }
    if($citation_p_title=='')
    {
        $citation_p_title = '';
        $tool_period_01 = '';
    }
    if($citation_name=='')
    {
        $citation_name = '';
        $tool_period_03 = '';
    }
    
    
//    if(isset ($_POST['auther']) && isset ($_POST['date']))
//    {
//        $tool_period_06 = '';
//    }

    if(empty ($_POST['auther']) && empty ($_POST['date']) && empty ($_POST['name']) && empty ($_POST['volume']))
    {
        $tool_period_date = '';
    }
    
//    if($citation_date=='')
//    {
//        $citation_date = '(発行日不明)';
//        $tool_open = '';
//        $tool_close = '';
//    }
    
    if(empty ($_POST['auther']) && empty ($_POST['date']))
    {
        //     「論文名」. 誌名 (出版年). 『掲載メディア』. 巻数（号数）. p.始めのページ － 終りのページ.　URL, (ｱｸｾｽ日)
        
        print $tool_bracket_open;
        print $citation_p_title;
        print $tool_bracket_close;
        print ' ';
        print $citation_a_title;
//        print $tool_period_01;
        print '(';
        print '発行年不明';
        print ')';
        print $tool_period_date;
        print ' ';
        print $tool_s_bracket_open;
        print $citation_name;
        print $tool_s_bracket_close;
        print $tool_period;
        print ' ';
//        print $citation_a_title;
//        print $tool_period_02;
//
//        print $tool_s_bracket_open;
//        print $citation_name;
//        print $tool_s_bracket_close;
//        print $tool_period_03;
//        print ' ';

        print $citation_volume;
        print $tool_period_06;
        print ' ';
        print $tool_open_issue;
        print $citation_issue;
        print $tool_close_issue;
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


    else
    {
        if(empty($citation_auther) ){
            print $tool_bracket_open;
            print $citation_p_title;
            print $tool_bracket_close;
            print ' ';
            print $citation_a_title;

            print $tool_open;
            print $citation_date;
            print $tool_close;
//            print $tool_period;
            print $tool_period_07;
            
            print ' ';
            print $tool_s_bracket_open;
            print $citation_name;
            print $tool_s_bracket_close;
            print $tool_period;
            print ' ';

            print $citation_volume;
            print $tool_period_06;
            print ' ';
            print $tool_open_issue;
            print $citation_issue;
            print $tool_close_issue;
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
                print ')';
                print $tool_period_date;
                print ' ';
                print $tool_s_bracket_open;
                print $citation_name;
                print $tool_s_bracket_close;
                print $tool_period;
                print ' ';

                print $citation_volume;
                print $tool_period_06;
                print ' ';
                print $tool_open_issue;
                print $citation_issue;
                print $tool_close_issue;
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
                            else
                            {
                            
                            if($_POST['media']==='2-3')
                            {  
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
                                print ' ';
                                
                                print $citation_a_title;
                                print $tool_period_02;
                                print ' ';
                                
                                print $tool_s_bracket_open;
                                print $citation_name;
                                print $tool_s_bracket_close;
                                print $tool_period_03;
                                print ' ';
                                
                                print $citation_volume;
                                print $tool_period_06;
                                print ' ';
                                print $tool_open_issue;
                                print $citation_issue;
                                print $tool_close_issue;
                                print ' ';
                                
                                print $tool_period_04;
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

    
    
    


//空の時に出るアラート
//    if( empty($citation_thesis) ){  
//        echo '変数「$var」は0あるいは空です';  
//    }

?>

<!--



<br>-->
