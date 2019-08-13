<div class="modal fade" id="reviewModal" tabindex="-1" role="dialog" aria-labelledby="reviewModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center">Review</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="reviewForm" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Name <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" placeholder="Name" name="name" required minlength="4">
                    </div>
                    <div class="form-group">
                        <label>Email <span class="text-danger">*</span></label>
                        <input class="form-control" type="email" placeholder="Email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label>Company, service or trader name <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" placeholder="Company, service or trader name" name="company">
                    </div>
                    <div class="form-group">
                        <label>Comment <span class="text-danger">*</span></label>
                        <textarea class="form-control" rows="3" placeholder="Comment" name="comment" required minlength="150" maxlength="200"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Rating <span class="text-danger">*</span></label>
                        <br>
                        <div class="star-rating" required>
                            <input id="star-rating5" name="rating" type="radio" value="5" class="radio-btn hidden" />
                            <label for="star-rating5" ><span class="fa fa-star"></span></label>
                            <input id="star-rating4" name="rating" type="radio" value="4" class="radio-btn hidden" />
                            <label for="star-rating4" ><span class="fa fa-star"></span></label>
                            <input id="star-rating3" name="rating" type="radio" value="3" class="radio-btn hidden" />
                            <label for="star-rating3" ><span class="fa fa-star"></span></label>
                            <input id="star-rating2" name="rating" type="radio" value="2" class="radio-btn hidden" />
                            <label for="star-rating2" ><span class="fa fa-star"></span></label>
                            <input id="star-rating1" name="rating" type="radio" value="1" class="radio-btn hidden" />
                            <label for="star-rating1" ><span class="fa fa-star"></span></label>
                        </div>
                        <br id="star-ratingLabel">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" value="Submit" class="btn btn-primary disable_submit">Leave Review</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
</script>