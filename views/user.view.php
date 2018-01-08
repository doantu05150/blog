<div class="container user_active">
    <div class="row">
        <div class="col-md-4">
            <h1>
                <p class="text-muted"><small>Hi, <a href="#"><?= $_SESSION['user_first']?></a>!</small></p>
            </h1>
        <form action="post">
            <div class="form-group">
                <textarea class="form-control" placeholder="What's on your mind?" ></textarea>
                <button type="submit" class="btn btn-success green"><i class="fa fa-share"> Share</i></button>
            </div>
        </form>
        </div>
    </div>
</div>