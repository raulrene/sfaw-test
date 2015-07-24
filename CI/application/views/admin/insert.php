<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../assets/css/style.css" type="text/css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link href="../assets/css/index.css" type="text/css" rel="stylesheet">
        <link href="../assets/css/slider.css" type="text/css" rel="stylesheet">
        <link href="../assets/css/main-content.css" type="text/css" rel="stylesheet">
        <link href="../assets/css/footer.css" type="text/css" rel="stylesheet">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    </head>
    </head>
    <body>
    <div class="row">
        <div class="fourcol column">
            <div class="three-col">
                <h2>Capitol</h2>
                <form method="post" action="operations.php">
                    <input type="hidden" name="hidden" value="capitol">
                    <div class="form-field">
                        <input type="text" placeholder="nume" size="30" value="" name="nume">
                    </div>
                    <div class="form-field">
                        <input type="text" placeholder="order" size="30" value="" name="order">
                    </div>

                    <br>
                    <input type="submit" value="Insert" name="insert" class="button medium">
                    <input type="submit" value="Edit" name="edit" class="button medium">
                </form>
            </div>
        </div>

        <div class="fourcol column">
            <div class="three-col">
                <h2>SubCapitol</h2>
                <form method="post" action="operations.php">
                    <input type="hidden" name="hidden" value="sub_capitol">
                    <div class="form-field">
                        <input type="text" placeholder="capitol_id" size="30" value="" name="capitol_id">
                    </div>
                    <div class="form-field">
                        <input type="text" placeholder="nume" size="30" value="" name="nume">
                    </div>
                    <div class="form-field">
                        <input type="text" placeholder="order" size="30" value="" name="order">
                    </div>
                    <div class="form-field">
                        <input type="text" placeholder="class" size="30" value="" name="class">
                    </div>
                    <div class="form-field">
                        <input type="text" placeholder="friendly_url" size="30" value="" name="friendly_url">
                    </div>

                    <br>
                    <input type="submit" value="Insert" name="insert" class="button medium">
                    <input type="submit" value="Edit" name="edit" class="button medium">
                </form>
            </div>
        </div>

        <div class="fourcol column last">
            <div class="three-col">
                <h2>SubSubCapitol</h2>
                <form method="post" action="operations.php">
                    <input type="hidden" name="hidden" value="sub_sub_capitol">
                    <div class="form-field">
                        <input type="text" placeholder="sub_capitol_id" size="30" value="" name="sub_capitol_id">
                    </div>
                    <div class="form-field">
                        <input type="text" placeholder="nume" size="30" value="" name="nume">
                    </div>
                    <div class="form-field">
                        <input type="text" placeholder="order" size="30" value="" name="order">
                    </div>

                    <br>
                    <input type="submit" value="Insert" name="insert" class="button medium">
                    <input type="submit" value="Edit" name="edit" class="button medium">
                </form>
            </div>
        </div>

    </div>
    <hr/>
    <div class="row">
        <div class="fourcol column">
            <div class="three-col">
                <h2>Content</h2>
                <form method="post" action="operations.php">
                    <input type="hidden" name="hidden" value="content">
                    <div class="form-field">
                        <input type="text" placeholder="sub_sub_capitol_id" size="30" value="" name="sub_sub_capitol_id">
                    </div>
                    <div class="form-field">
                        <input type="text" placeholder="content_text" size="30" value="" name="content_text">
                    </div>

                    <br>
                    <input type="submit" value="Insert" name="insert" class="button medium">
                    <input type="submit" value="Edit" name="edit" class="button medium">
                </form>
            </div>
        </div>

        <div class="fourcol column">
            <div class="three-col">
                <h2>Testimonials</h2>
                <form method="post" action="operations.php">
                    <input type="hidden" name="hidden" value="testimonials">
                    <div class="form-field">
                        <input type="text" placeholder="title" size="30" value="" name="title">
                    </div>
                    <div class="form-field">
                        <input type="text" placeholder="author" size="30" value="" name="author">
                    </div>
                    <div class="form-field">
                        <input type="text" placeholder="text" size="30" value="" name="text">
                    </div>
                    <div class="form-field">
                        <input type="text" placeholder="img" size="30" value="" name="img">
                    </div>
                    <div class="form-field">
                        <input type="text" placeholder="tag" size="30" value="" name="tag">
                    </div>

                    <br>
                    <input type="submit" value="Insert" name="insert" class="button medium">
                    <input type="submit" value="Edit" name="edit" class="button medium">
                </form>
            </div>
        </div>

        <div class="fourcol column last">
            <div class="three-col">
                <h2>Courses</h2>
                <form method="post" action="operations.php">
                    <input type="hidden" name="hidden" value="courses">
                    <div class="form-field">
                        <input type="text" placeholder="name" size="30" value="" name="name">
                    </div>
                    <div class="form-field">
                        <input type="text" placeholder="author" size="30" value="" name="author">
                    </div>
                    <div class="form-field">
                        <input type="text" placeholder="picture" size="30" value="" name="picture">
                    </div>
                    <div class="form-field">
                        <input type="text" placeholder="user" size="30" value="" name="user">
                    </div>
                    <div class="form-field">
                        <input type="text" placeholder="price" size="30" value="" name="price">
                    </div>
                    <div class="form-field">
                        <input type="text" placeholder="stars" size="30" value="" name="stars">
                    </div>
                    <br>
                    <input type="submit" value="Insert" name="insert" class="button medium">
                    <input type="submit" value="Edit" name="edit" class="button medium">
                </form>
            </div>
        </div>

    </div>
    <hr/>
    <div class="row">
        <div class="fourcol column">
            <div class="three-col">
                <h2>Comments</h2>
                <form method="post" action="operations.php">
                    <input type="hidden" name="hidden" value="comments">
                    <div class="form-field">
                        <input type="text" placeholder="img" size="30" value="" name="img">
                    </div>
                    <div class="form-field">
                        <input type="text" placeholder="author" size="30" value="" name="author">
                    </div>
                    <div class="form-field">
                        <input type="text" placeholder="text" size="30" value="" name="text">
                    </div>
                    <div class="form-field">
                        <input type="text" placeholder="date" size="30" value="" name="date">
                    </div>
                    <div class="form-field">
                        <input type="text" placeholder="author_link" size="30" value="" name="author_link">
                    </div>

                    <br>
                    <input type="submit" value="Insert" name="insert" class="button medium">
                    <input type="submit" value="Edit" name="edit" class="button medium">
                </form>
            </div>
        </div>

        <div class="fourcol column">
            <div class="three-col">
                <h2>Replies</h2>
                <form method="post" action="operations.php">
                    <input type="hidden" name="hidden" value="replies">
                    <div class="form-field">
                        <input type="text" placeholder="id_parent" size="30" value="" name="id_parent">
                    </div>
                    <div class="form-field">
                        <input type="text" placeholder="img" size="30" value="" name="img">
                    </div>
                    <div class="form-field">
                        <input type="text" placeholder="author" size="30" value="" name="author">
                    </div>
                    <div class="form-field">
                        <input type="text" placeholder="text" size="30" value="" name="text">
                    </div>
                    <div class="form-field">
                        <input type="text" placeholder="date" size="30" value="" name="date">
                    </div>
                    <div class="form-field">
                        <input type="text" placeholder="author_link" size="30" value="" name="author_link">
                    </div>

                    <br>
                    <input type="submit" value="Insert" name="insert" class="button medium">
                    <input type="submit" value="Edit" name="edit" class="button medium">
                </form>
            </div>
        </div>
        <div class="fourcol column last">
            <div class="three-col">
                <h2>Description</h2>
                <form method="post" action="operations.php">
                    <input type="hidden" name="hidden" value="description">

                    <div class="form-field">
                        <input type="text" placeholder="course_id" size="30" value="" name="course_id">
                    </div>
                    <div class="form-field">
                        <input type="text" placeholder="course_text" size="30" value="" name="course_text">
                    </div>
                    <div class="form-field">
                        <input type="text" placeholder="about_text" size="30" value="" name="about_text">
                    </div>

                    <input type="submit" value="Insert" name="insert" class="button medium">
                    <input type="submit" value="Edit" name="edit" class="button medium">
                </form>
            </div>
        </div>
    </div>


    </body>
</html>