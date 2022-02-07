<?php include 'header.php';?>
<section class="py-5  ">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto" >
                <div class="card">
                    <div class="card-header"><h3>String Word Count</h3></div>
                    <div class="card-body">
                        <form action="action.php" method="post">

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Enter your String</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="string" value="<?php echo isset($result['string']) ? $result['string'] : ''; ?>"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Total word</label>
                                <div class="col-md-9">
                                    <input type="number" readonly class="form-control" value="<?php echo isset($result['word']) ? $result['word'] : ''; ?>" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Total Character</label>
                                <div class="col-md-9">
                                    <input type="number" readonly class="form-control" value="<?php echo isset($result['character']) ? $result['character'] : ''; ?>" />

                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label"></label>
                                <div class="col-md-9">
                                    <label class="col-form-label">
                                        <input type="submit" name="btn" class="btn btn-outline-success" value="submit" /></label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php';?>

