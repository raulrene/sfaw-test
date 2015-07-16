<meta charset = "utf-8">
<title>Forms</title>
<link rel="stylesheet" href="../assets/css/style.css" type="text/css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href="../assets/css/index.css" type="text/css" rel="stylesheet">
<link href="../assets/css/slider.css" type="text/css" rel="stylesheet">
<link href="../assets/css/main-content.css" type="text/css" rel="stylesheet">
<link href="../assets/css/footer.css" type="text/css" rel="stylesheet">

<div style="margin-left: 50px;float:left;border-right: 1px dotted #000;padding-right:20px">
    <h1>Chapters</h1><br/>
    <form method="post" action="operations.php" id="">
        <input type="hidden" name="hidden" value="chapters" />
        <div class="form_field">
            <input type="text" name="ch_name" size="18"  placeholder="Chapter Name" required />
        </div>
        <div class="form_field">
            <input type="text" name="url" size="18"  placeholder="Url" required />
        </div>
        <br />
        <input type="submit" name="submit" value="add" class="button large primary"/>
    </form>
</div>

<div style="margin-left: 50px;float:left;border-right: 1px dotted #000;padding-right:20px">
    <h1>Sub-Chapters</h1><br/>
    <form method="post" action="operations.php" id="">
        <input type="hidden" name="hidden" value="sub_chapters" />
        <div class="form_field">
            <input type="text" name="chapter_id" size="18"  placeholder="Chapter Id" required />
        </div>
        <div class="form_field">
            <input type="text" name="links" size="18"  placeholder="Links" required />
        </div>
        <div class="form_field">
            <input type="text" name="friendly_url" size="18"  placeholder="Friendly url" required />
        </div>
        <br />
        <input type="submit" name="submit" value="add" class="button large primary"/>
    </form>
</div>

<div style="margin-left: 50px;float:left;border-right: 1px dotted #000;padding-right:20px">
    <h1>Sub-Sub-Chapters</h1><br/>
    <form method="post" action="operations.php" id="">
        <input type="hidden" name="hidden" value="ss_chapters" />
        <div class="form_field">
            <input type="text" name="sub_chapter_id" size="18"  placeholder="Sub-Chapter Id" required />
        </div>
        <div class="form_field">
            <input type="text" name="sub_sub_chapter_name" size="18"  placeholder="Sub_Sub-Chapter Name" required />
        </div>
        <div class="form_field">
            <input type="text" name="order" size="18"  placeholder="Order" required />
        </div>
        <br />
        <input type="submit" name="submit" value="add" class="button large primary"/>
    </form>
</div>

<div style="margin-left: 50px;float:left;border-right: 1px dotted #000;padding-right:20px">
    <h1>Content</h1><br/>
    <form method="post" action="operations.php" id="">
        <input type="hidden" name="hidden" value="content" />
        <div class="form_field">
            <input type="text" name="sub_sub_chapter_id" size="18"  placeholder="Sub-Sub-Chapter Id" required />
        </div>
        <div class="form_field">
            <input type="text" name="text_1" size="18"  placeholder="Text 1" required />
        </div>
        <div class="form_field">
            <input type="text" name="text_2" size="18"  placeholder="Text 2" required />
        </div>
        <div class="form_field">
            <input type="text" name="text_3" size="18"  placeholder="Text 3" required />
        </div>
        <br />
        <input type="submit" name="submit" value="add" class="button large primary"/>
    </form>
</div>
<div class="clear"></div>

<div style="margin-left: 50px;float:left;border-right: 1px dotted #000;padding-right:20px">
    <h1>Comments</h1><br/>
    <form method="post" action="operations.php" id="">
        <input type="hidden" name="hidden" value="comments" />
        <div class="form_field">
            <input type="text" name="author" size="18"  placeholder="Author Name" required />
        </div>
        <div class="form_field">
            <input type="text" name="author_img" size="18"  placeholder="Author Image" required />
        </div>
        <div class="form_field">
            <input type="text" name="author_link" size="18"  placeholder="Author Link" required />
        </div>
        <div class="form_field">
            <input type="text" name="date_posted" size="18"  placeholder=" Today Date" required />
        </div>
        <div class="form_field">
            <input type="text" name="comm_text" size="18"  placeholder="Comment" required />
        </div>
        <br />
        <input type="submit" name="submit" value="add" class="button large primary"/>
    </form>
</div>

<div style="margin-left: 50px;float:left;border-right: 1px dotted #000;padding-right:20px">
    <h1>Replies</h1><br/>
    <form method="post" action="operations.php" id="">
        <input type="hidden" name="hidden" value="replies" />
        <div class="form_field">
            <input type="text" name="author" size="18"  placeholder="Author Name" required />
        </div>
        <div class="form_field">
            <input type="text" name="author_id" size="18"  placeholder="Comment Author id" required />
        </div>
        <div class="form_field">
            <input type="text" name="author_img" size="18"  placeholder="Author Image" required />
        </div>
        <div class="form_field">
            <input type="text" name="author_link" size="18"  placeholder="Author Link" required />
        </div>
        <div class="form_field">
            <input type="text" name="date_posted" size="18"  placeholder=" Today Date" required />
        </div>
        <div class="form_field">
            <input type="text" name="comm_text" size="18"  placeholder="Reply" required />
        </div>
        <br />
        <input type="submit" name="submit" value="add" class="button large primary"/>
    </form>
</div>

<div style="margin-left: 50px;float:left;border-right: 1px dotted #000;padding-right:20px">
    <h1>Courses</h1><br/>
    <form method="post" action="operations.php" id="">
        <input type="hidden" name="hidden" value="courses" />
        <div class="form_field">
        <input type="text" name="name" size="18"  placeholder="Name" required />
        </div>
        <div class="form_field">
            <input  type="text" name="price" size="18"  placeholder="price" required />
        </div>
        <div class="form_field">
            <input  type="text" name="img" size="18"  placeholder="image" required />
        </div>
        <div class="form_field">
            <input  type="text" name="author" size="18"  placeholder="Author" required />
        </div>
        <div class="form_field">
            <input  type="text" name="user" size="18"  placeholder="nr of users" required />
        </div>
        <div class="form_field">
            <input  type="text" name="stars" size="18"  placeholder="Nr of stars"" required />
        </div>
        <div class="form_field">
            <input type="text" name="alt" size="18"  placeholder="image alt" required />
        </div>
            <br />
        <input type="submit" name="submit" value="add" class="button large primary"/>
    </form>
</div>