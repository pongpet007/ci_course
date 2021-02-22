<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <? $this->load->view('watchshop/inc/title') ?>
</head>

<body>    
    <?php $this->load->view('watchshop/inc/header') ?>
    <main>
        <div class="container">
        	<div class="row">
        		<div class="col-md-12">
        			<? echo $calendar ?>
        		</div>
        	</div>
        </div>                      
    </main>
    <?php $this->load->view('watchshop/inc/footer') ?>

    <?php $this->load->view('watchshop/inc/script') ?>
    <?php $this->load->view('watchshop/inc/css') ?>
    
</body>
</html>