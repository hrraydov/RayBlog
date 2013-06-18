
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $title; ?></title>
        <script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
        <script>
            tinymce.init(
                    {
                        selector: '.editor',
                        theme: "modern",
                        plugins: [
                            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                            "searchreplace wordcount visualblocks visualchars code fullscreen",
                            "insertdatetime media nonbreaking save table contextmenu directionality",
                            "emoticons template paste textcolor"
                        ],
                        toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
                        toolbar2: "print preview media | forecolor backcolor emoticons",
                    });
        </script>
        <link href='http://fonts.googleapis.com/css?family=Tenor+Sans' rel='stylesheet' type='text/css'/>
        <?php
        echo HTML::style('media/default.css');
        ?>
    </head>
    <body>
        <nav>
            <menu>
                <ul>
                    <li>
                        <a class="menuAnchor" href="/blogcms/">Home</a>
                    </li>  
                    <?php
                    foreach ($pages as $page)
                    {
                        echo '<li>' . HTML::anchor('home/showPage/' . $page->page_id, $page->page_title, array('class' => 'menuAnchor')) . '</li>';
                    }
                    ?>
                </ul>
            </menu>
        </nav>
        <section id="main">
            <?php
            echo $content;
            ?>
        </section
        <footer>
            <?php
            if (Session::instance()->get('is_logged') === TRUE)
            {
                echo HTML::anchor('admin/index', 'Admin');
            } else
            {
                echo HTML::anchor('home/login', 'Login');
            }
            ?>
        </footer>
    </body>
</html>
