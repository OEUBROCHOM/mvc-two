<div class="container">
    <form action="/users/store" method = "post">
        <div class="mb-3 mt-3">
            <label for="email" class="form-label">Username:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter username" name="name">
        </div>
        <div class="mb-3">
            <label for="pwd" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
        <div class="mb-3">
            <label for="pwd" class="form-label">Role:</label>
            <input type="text" class="form-control" id="pwd" placeholder="Enter Role" name="role">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>