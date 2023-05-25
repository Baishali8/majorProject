

<?php $__env->startSection('content'); ?>

<style>
        .campus img {
            height: 280px;
        }

        body {
            background: hsl(0, 0, 94%);
        }
    </style>

<div class="container-fluid my-5 campus">
        <h1 class="text-center fw-bold display-1 mb-5">Campus <span class="text-danger">Tour</span></h1>
        <div class="row">
            <div class="col-12 m-auto">
                <div class="owl-carousel owl-theme">
                    <div class="item mb-4">
                        <div class="card border-0 shadow">
                            <img src="./images/campus/lab.jpg" alt="" class="card-img-top">
                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4>Laboratory</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="card border-0 shadow">
                            <img src="./images/campus/Common Room.jpg" alt="" class="card-img-top">
                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4>Common Room</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                            <img src="./images/campus/Class Room.jpg" alt="" class="card-img-top">
                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4>Class Room</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                            <img src="./images/campus/library.jpg" alt="" class="card-img-top">
                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4>Library</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                            <img src="./images/campus/Faculty Room.jpg" alt="" class="card-img-top">
                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4>Faculty Room</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                            <img src="./images/campus/Canteen.jpg" alt="" class="card-img-top">
                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4>Canteen</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                            <img src="./images/campus/Study Room.jpg" alt="" class="card-img-top">
                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4>Study Room</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 15,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        })
    </script>

<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TIHProj\project\resources\views/campusTour.blade.php ENDPATH**/ ?>