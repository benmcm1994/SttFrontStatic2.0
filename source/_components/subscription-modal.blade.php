<div class="modal fade" id="subscriptionModal" tabindex="-1" role="dialog" aria-labelledby="subscriptionModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center">Newsletter</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="subscriptionForm">
            <div class="modal-body">
                <div class="form-group">
                    <label>Subscribe to our newsletter and receive the latest news!</label>
                </div>
                <div class="form-group">
                    <label>Name</label>
                    <input class="form-control" type="text" placeholder="Name" name="name"  minlength="5" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" type="email" placeholder="Email" name="email"  minlength="5" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" value="Submit" class="btn btn-primary disable_submit">Subscribe</button>
            </div>
            </form>
        </div>
    </div>
</div>