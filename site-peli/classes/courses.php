<?php
    class Course{
        private $id, $course_name,$course_price, $course_img, $course_author, $course_user, $course_stars, $img_alt;
        private $table = 'courses';

        public function getCourses(){
            global $db;
            $q = "SELECT * FROM $this->table";
            $data = $db->fetch_rows($q);
            return $data;
        }
        public function getCourseById($id){
            global $db;
            $q = "SELECT * FROM $this->table WHERE id =$id";
            $data = $db->fetch_row($q);
            return $data;
        }

        public function getCoursesHome(){
            global $db;
            $q = "SELECT * FROM $this->table LIMIT 4";
            $data = $db->fetch_rows($q);
            return $data;
        }

        /**
         * @param mixed $course_author
         */
        public function setCourseAuthor($course_author)
        {
            $this->course_author = $course_author;
        }

        /**
         * @return mixed
         */
        public function getCourseAuthor()
        {
            return $this->course_author;
        }

        /**
         * @param mixed $course_img
         */
        public function setCourseImg($course_img)
        {
            $this->course_img = $course_img;
        }

        /**
         * @return mixed
         */
        public function getCourseImg()
        {
            return $this->course_img;
        }

        /**
         * @param mixed $course_name
         */
        public function setCourseName($course_name)
        {
            $this->course_name = $course_name;
        }

        /**
         * @return mixed
         */
        public function getCourseName()
        {
            return $this->course_name;
        }

        /**
         * @param mixed $course_price
         */
        public function setCoursePrice($course_price)
        {
            $this->course_price = $course_price;
        }

        /**
         * @return mixed
         */
        public function getCoursePrice()
        {
            return $this->course_price;
        }

        /**
         * @param mixed $course_stars
         */
        public function setCourseStars($course_stars)
        {
            $this->course_stars = $course_stars;
        }

        /**
         * @return mixed
         */
        public function getCourseStars()
        {
            return $this->course_stars;
        }

        /**
         * @param mixed $course_user
         */
        public function setCourseUser($course_user)
        {
            $this->course_user = $course_user;
        }

        /**
         * @return mixed
         */
        public function getCourseUser()
        {
            return $this->course_user;
        }

        /**
         * @param mixed $id
         */
        public function setId($id)
        {
            $this->id = $id;
        }

        /**
         * @return mixed
         */
        public function getId()
        {
            return $this->id;
        }

        /**
         * @param mixed $img_alt
         */
        public function setImgAlt($img_alt)
        {
            $this->img_alt = $img_alt;
        }

        /**
         * @return mixed
         */
        public function getImgAlt()
        {
            return $this->img_alt;
        }


    }
?>