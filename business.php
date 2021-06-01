<!DOCTYPE html>
<html>

<head>
    <title>Business | Coursatk - Growth Platform for Arab</title>
    <?php include('links.php') ?>
</head>
<style>
    .slick-track {
        gap: 10px;
        display: flex;
        width: 100% !important
    }

    .recommended-slider,
    .recent-slider,
    .handpicked-slider {
        margin-bottom: 4%;
    }

    .card {
        border: none;
    }

    .card-info p {
        color: black;
        font-size: 15px;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        letter-spacing: -.02rem;
    }

    .mentor-desc {
        color: #909090;
        font-size: 12px;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        letter-spacing: 0.5px;
        font-family: 'Open Sans', 'Helvetica Light', Arial, sans-serif !important;
        font-weight: 600;
    }
</style>

<body class="d-flex flex-column min-vh-100">
    <?php include('navbar.php') ?>
    <div class="container" style="margin-top: 5%;font-size: 17px;">
        <span style="font-size: 20px;">All Development Courses</span>
        <main>
            <div class="recent-courses">
                <div class="recent-slider" style="margin-top: 2%;">
                    <a href="#">
                        <div class="card">
                            <div class="card-img" style="width:100%;height:140px">
                                <img src="pics/mxhogiMlSmall.png" style="object-fit:cover; width:100%;height:100%">
                            </div>
                            <div class="card-info" style="margin-top: 5%;padding:5px">
                                <p>Human Performance Improvement</p>
                                <span class="author" style="color: #6d6d6d;font-size: 12px;margin-top: 5%;letter-spacing: 0.5px;">Ahmed Mohamed</span>
                                <div class="rating">
                                    <i class="fas fa-star" style="font-size: 13px;"></i>
                                    <i class="fas fa-star" style="font-size: 13px;"></i>
                                    <i class="fas fa-star" style="font-size: 13px;"></i>
                                    <i class="fas fa-star" style="font-size: 13px;"></i>
                                    <i class="fas fa-star" style="font-size: 13px;"></i>
                                </div>
                                <span style="color: black;font-size: 1rem;">570 EGP</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </main>
    </div>
    <?php include('footer.php') ?>
</body>
<?php include('scripts.php') ?>

</html>