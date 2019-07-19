<?php $this->load->view('shared/header')?>

    <section class="page_breadcrumbs ls ms section_padding_25 bg_image">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="small">Demi Shop</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="ls section_padding_top_100 section_padding_bottom_75 columns_padding_25">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="bottommargin_40">
                        <img src="<?php echo base_url('assets/images/shop.jpg')?>" alt="">
                    </div>

                    <div class="entry-excerpt">
                        <p>
                            Demi shop is the retail shop software designed for small business and beginners in mind. It helps the owner of the store to
                            track daily sales and the profit made on each sale.
                        </p>
                    </div>
                    <p>
                        It is designed with simple interface to make it easier for the user to make the most of it.
                    </p>
                </div>

                <div class="col-md-5">

                    <div class="panel-group" id="accordion">

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="icon-tab" data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                        <i class="rt-icon2-th-list-outline"></i>
                                        Unlimited Items
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <div class="media">
                                        <div class="media-body">
                                            Create and edit unlimited number of products and expenses with just few clicks.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="icon-tab collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                        <i class="rt-icon2-banknote"></i>
                                        Unlimited Transactions
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="media">
                                        <div class="media-body">
                                            Create unlimited number of sales, purchases and expenses with an user friendly interface with Demi Shop.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="icon-tab collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                                        <i class="rt-icon2-book2"></i>
                                        Powerful reports
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse3" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="media">
                                        <div class="media-body">
                                            <p>Demi shop has powerful reports which shows your profit on each sale you make. You can also get detail daily reports on sales.</p>
                                            <p>It gives you the freedom to track the trend of each product</p>
                                            <p>Also gives you a Profit and Loss report that shows you the real profit you have made after all expenses being put into account</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="<?php echo base_url('download/demishop')?>" class="theme_button wide_button color1">Download</a>

                </div>
            </div>
        </div>
    </section>

<?php $this->load->view('shared/footer')?>