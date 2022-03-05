<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="d-flex flex-column align-items-center perm-marker">
                <h2><a href="<?= base_url() ?>" class="hotlink">RECIPE BOOK</a></h2>
                <h5>LOGIN</h5>
                <?php if($this->session->flashdata('status') === 'success'): ?>
                    <div class="alert alert-success">
                        <?= $this->session->flashdata('status_message') ?>
                    </div>
                <?php elseif($this->session->flashdata('status') === 'fail'): ?>
                    <div class="alert alert-danger">
                        <?= $this->session->flashdata('status_message') ?>
                    </div>
                <?php endif ?>
            </div>
            <div class="card">
                <?= form_open() ?>
                    <article class="card-body">
                            <div class="form-group">
                                <label>Email address</label>
                                <input type="email" class="form-control" name="email" value="<?= set_value('email') ?>">
                                <small class="text-danger font-italic"><?= form_error('email') ?></small>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password">
                                <small class="text-danger font-italic"><?= form_error('password') ?></small>
                            </div>                            
                    </article>
                    <div class="border-top card-body text-center d-flex justify-content-end align-items-end">
                    <span class="pr-2"><small>Not Registered? <a href="<?= site_url('register') ?>">Register</a></small></span>
                        <button type="submit" class="btn btn-dark"> Login </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>