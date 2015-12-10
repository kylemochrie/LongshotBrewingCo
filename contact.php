<!DOCTYPE html>
<html lang="en">
<?php include "header.html"; ?>
<body>
<?php include "nav.html"; ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">

            <form action="/" method="post" role="form">
                <h2>Got something to say?</h2>

                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" placeholder="Name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" class="form-control" id="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label for="comment">Comments:</label>
                    <textarea class="form-control" name="comment" id="comment" cols="30" rows="10" required></textarea>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
<?php include "footer.html"; ?>
</body>
</html>