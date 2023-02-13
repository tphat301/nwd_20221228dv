<?php
    /* Blog */
    $nametype = "tin-tuc";
    $config['news'][$nametype]['title_main'] = "Blog";
    $config['news'][$nametype]['dropdown'] = false;
    $config['news'][$nametype]['view'] = true;
    $config['news'][$nametype]['office'] = false;/*chuc vu*/
    $config['news'][$nametype]['copy'] = false;
    $config['news'][$nametype]['copy_image'] = false;
    $config['news'][$nametype]['slug'] = true;
    $config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
    $config['news'][$nametype]['images'] = true;
    $config['news'][$nametype]['show_images'] = true;
    $config['news'][$nametype]['gallery'] = array();
    $config['news'][$nametype]['desc'] = true;
    $config['news'][$nametype]['content'] = true;
    $config['news'][$nametype]['content_cke'] = true;
    $config['news'][$nametype]['seo'] = true;
    $config['news'][$nametype]['width'] = 576;
    $config['news'][$nametype]['height'] = 432;
    $config['news'][$nametype]['thumb'] = '100x100x1';
    $config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

    /* Quy trình thiết kế */
    $nametype = "quy-trinh-thiet-ke";
    $config['news'][$nametype]['title_main'] = "Quy trình thiết kế";
    $config['news'][$nametype]['dropdown'] = false;
    $config['news'][$nametype]['view'] = true;
    $config['news'][$nametype]['office'] = false;/*chuc vu*/
    $config['news'][$nametype]['copy'] = false;
    $config['news'][$nametype]['copy_image'] = false;
    $config['news'][$nametype]['slug'] = true;
    $config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
    $config['news'][$nametype]['images'] = false;
    $config['news'][$nametype]['show_images'] = false;
    $config['news'][$nametype]['gallery'] = array();
    $config['news'][$nametype]['desc'] = false;
    $config['news'][$nametype]['content'] = true;
    $config['news'][$nametype]['content_cke'] = true;
    $config['news'][$nametype]['seo'] = true;
    $config['news'][$nametype]['width'] = false;
    $config['news'][$nametype]['height'] = false;
    $config['news'][$nametype]['thumb'] = '100x100x1';
    $config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

    /* Dịch vụ */
    $nametype = "dich-vu";
    $config['news'][$nametype]['title_main'] = "Dịch vụ";
    $config['news'][$nametype]['dropdown'] = false;
    $config['news'][$nametype]['view'] = true;
    $config['news'][$nametype]['office'] = false;/*chuc vu*/
    $config['news'][$nametype]['copy'] = false;
    $config['news'][$nametype]['copy_image'] = false;
    $config['news'][$nametype]['slug'] = true;
    $config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
    $config['news'][$nametype]['images'] = true;
    $config['news'][$nametype]['show_images'] = true;
    $config['news'][$nametype]['gallery'] = array();
    $config['news'][$nametype]['desc'] = false;
    $config['news'][$nametype]['content'] = true;
    $config['news'][$nametype]['content_cke'] = true;
    $config['news'][$nametype]['seo'] = true;
    $config['news'][$nametype]['width'] = 60;
    $config['news'][$nametype]['height'] = 60;
    $config['news'][$nametype]['thumb'] = '100x100x1';
    $config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

    /* Cảm nhận khách hàng */
    $nametype = "cam-nhan-khach-hang";
    $config['news'][$nametype]['title_main'] = "Cảm nhận khách hàng";
    $config['news'][$nametype]['dropdown'] = false;
    $config['news'][$nametype]['list'] = true;
    $config['news'][$nametype]['cat'] = true;
    $config['news'][$nametype]['item'] = true;
    $config['news'][$nametype]['sub'] = true;
    $config['news'][$nametype]['tags'] = true;
    $config['news'][$nametype]['copy'] = false;
    $config['news'][$nametype]['copy_image'] = false;
    $config['news'][$nametype]['view'] = true;
    $config['news'][$nametype]['office'] = false;/*chuc vu*/
    $config['news'][$nametype]['slug'] = true;
    $config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
    $config['news'][$nametype]['images'] = true;
    $config['news'][$nametype]['show_images'] = true;
    $config['news'][$nametype]['gallery'] = array();
    $config['news'][$nametype]['desc'] = true;
    $config['news'][$nametype]['content'] = true;
    $config['news'][$nametype]['content_cke'] = false;
    $config['news'][$nametype]['seo'] = true;
    $config['news'][$nametype]['width'] = 90;
    $config['news'][$nametype]['height'] = 90;
    $config['news'][$nametype]['thumb'] = '146x146x1';
    $config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

    /* Quản lý mục (Không cấp) */
    if(isset($config['news']))
    {
        foreach($config['news'] as $key => $value)
        {
            if(!isset($value['dropdown']) || (isset($value['dropdown']) && $value['dropdown'] == false))
            { 
                $config['shownews'] = 1;
                break;
            }
        }
    }
?>