<div class="container">
    <form action="/users/update/<?=$user['id'] ?>" method= "post">
        <div class="mb-3 mt-3">
            <label for="name" class ="form-label">Username:</label>
            <input type="text" class="form-control" id="name" name="name" value="<?= $user['name'] ?>">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="<?= $user['email'] ?>">
        </div>
        <div class="mb-3">
            <label for="role" class="form-label">Role:</label>
            <input type="text" class="form-control" name="role" value="<?= $user['role'] ?>">
        </div>
        <button type="submit" class="btn btn-warning">Update</button>
        <a href="/users" class="btn btn-secondary">Cancel</a>
    </form>
</div>