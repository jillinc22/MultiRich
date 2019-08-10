<?php require 'navInside.php'; ?>    
<body style="font-family: Arial;">
<div class="demo-content2">
        <h1>Update Account Details</h1>
        <form action="" method="POST"
            onsubmit="return editAccount();">


            <div class="row">
                <label>Username *</label> <span id="user_error"></span>
                <div>
                    <input type="text" name="name" id="name"
                        class="form-control"
                        placeholder="Enter New Username" required>
                </div>
            </div>

            <div class="row">
                <label>Password *</label><span id="password_error"></span>
                <div>
                    <input type="Password" name="password" id="password"
                        class="form-control"
                        placeholder="Enter New Password" required>

                </div>
            </div>
            <div class="row">
                <label>Confirm Password *</label><span id="password_error"></span>
                <div>
                    <input type="Password" name="password" id="password"
                        class="form-control"
                        placeholder="Confirm New Password" required>

                </div>
            </div>
            <div class="row">
                <div>
                    <button type="submit" name="submit"
                        class="btn login">Update</button>
                </div>
            </div>
        </form>
    </div>

<?php require 'footerInside.php'; ?>