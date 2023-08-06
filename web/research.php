<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Landing page template built with HTML and Bootstrap 4 for presenting training courses, classes, workshops and for convincing visitors to register using the form.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>CT519 Final Lab</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,600,700,700i&display=swap" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
</head>

<body data-spy="scroll" data-target=".fixed-top">
        <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->

    <?php include("navbar.php")
    ?>

    <!-- Students -->
    <div class="basic-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Research Topic</h2>
                        <p>เสนอการเปรียบเทียบประสิทธิภาพของ software 
                           ในการทำ Load balancing ในระดับของ Web application 
                           เพื่อการกระจายทรัพยากรอย่างมีประสิทธิภาพไปยัง Back end 
                           ในระบบคลาวด์คอมพิวติ้ง 
                           เพื่อประโยชน์ในการเลือกใช้ให้เหมาะสมกับงานและเพื่อปรับปรุงประสิทธิภาพการทำงาน
                        </p>
                        <p>
                           ในปัจจุบันนั้นระบบคลาวด์คอมพิวติ้ง (Cloud Computing) 
                           เข้ามามีบทบาทสำคัญในการลดต้นทุนฮาร์ดแวร์ ลดการใช้พลังงาน 
                           และใช้ทรัพยากรคอมพิวเตอร์อย่างมีประสิทธิภาพ 
                           และเปิดโอกาสให้ผู้ใช้บริการหรือเจ้าของแอปพลิเคชันเสียค่าใช้จ่ายตามที่ใช้จริง 
                           อีกทั้งยังช่วยเพิ่มประสิทธิภาพในการสร้างแอปพลิเคชันได้อย่างง่ายดาย 
                           และสามารถขยายระบบต่าง ๆ ได้รวดเร็ว 
                        </p>
                        <p> อย่างไรก็ตามความสามารถในการรองรับผู้ใช้งานจำนวนมากในขณะใดขณะหนึ่ง
                            ยังคงเป็นปัญหาที่ต้องคำนึงถึง และยังเป็นปัจจัยสำคัญที่ต้องออกแบบในการทำงานแบบคลาวด์
                            เพื่อให้สามารถตอบสนองต่อความต้องการของผู้ใช้งานได้เสมอ
                        </p>
                        <p>Load balancing เป็นวิธีการกระจายการรับส่งข้อมูลในเครือข่าย 
                            ซึ่งเป็นเทคนิคที่สำคัญในการกระจายการเชื่อมต่อเครือข่ายอย่างเท่าเทียมกัน
                            ไปยังกลุ่มทรัพยากรที่ใช้รองรับแอปพลิเคชัน ในสภาพแวดล้อมปัจจุบัน 
                            แอปพลิเคชันสมัยใหม่ต้องจัดการกับจำนวนผู้ใช้งานพร้อมกันอย่างมาก 
                            ในการนำเสนอเนื้อหาที่ถูกต้อง เช่น ข้อความ วิดีโอ ภาพและข้อมูลอื่นๆ 
                            ให้แก่ผู้ใช้งานแต่ละคนอย่างรวดเร็วและน่าเชื่อถือ 
                            ในขณะที่การจัดการกับปริมาณการเชื่อมต่อที่มากขนาดนั้น 
                            แอปพลิเคชันส่วนใหญ่ใช้เซิร์ฟเวอร์ทรัพยากรหลายเครื่องที่มีข้อมูลที่ซ้ำกันอยู่ในทุกเครื่อง 
                            Load balancer เป็นส่วนสำคัญที่อยู่ระหว่างผู้ใช้งานและกลุ่มเซิร์ฟเวอร์ 
                            ทำหน้าที่เป็นผู้อำนวยความสะดวกที่มองไม่เห็น 
                            เพื่อให้แน่ใจว่าเซิร์ฟเวอร์ทรัพยากรทุกเครื่องถูกใช้งานในอัตราส่วนที่สมดุล 
                            ป้องกันไม่ให้เซิร์ฟเวอร์ใดเกินกำลังในขณะที่จัดการคำขอการเข้าใช้งานของผู้ใช้ให้มีประสิทธิภาพ 
                            โดยกระจายการทำงานอย่างเท่าเทียมกันและน่าเชื่อถือ
                        </p> 
                        <p>ในเอกสารวิจัยนี้จะนำเสนอการเลือกใช้ Software Load balancer ในแบบ Open-source ที่มีการใช้งานแพร่หลาย คือ HAproxy, Nginx, Traefik เพื่อเปรียบเทียบถึงประสิทธิภาพและความเหมาะสมที่นำไปใช้กับระบบ Web application ที่มีการเรียกใช้ข้อมูลในฐานข้อมูล โดยใช้เมตริกในการเรียกไฟล์หลายขนาด เพื่อเปรียบเทียบประสิทธิภาพในแง่ของ Respond time และความถูกต้องของแต่ละ load balancer software ซึ่งช่วยให้สามารถเลือกใช้งานได้อย่างเหมาะสมกับพฤติกรรมการใช้งาน
                        </p>
                        <!-- <a class="btn-solid-reg popup-with-move-anim" href="#details-lightbox">LIGHTBOX</a> -->
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <img class="img-fluid" src="images/students.jpg" alt="alternative">
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-3 -->
    <!-- end of students -->

    <?php include("footer.php") ?> 
    	
    <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/jquery.countdown.min.js"></script> <!-- The Final Countdown plugin for jQuery -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>