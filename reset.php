<?php 
require 'config.php'; ?>
if(isset($_SESSION['new'])=="true"){
echo '<div class="alert alert-success absolue center text-center" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">×</span>
 </button>
 <span class="text-success">A password reset link was sent to your e-mail</span>
 </div>';
 unset($_SESSION['new']); 
 }
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Your Password ???</title>
</head>

<body>
    <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">New Password</span>
                <input
                type="email" name="mail" required value="<?php echo $mail;?>" 
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                 placeholder="example@mail.com" id="email"
                  
                />
              </label>

              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Confirm Password</span>
                <input
                type="email" name="mail" required value="<?php echo $mail;?>" 
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                 placeholder="example@mail.com" id="email"
                  
                />
              </label>

             
              <button
                class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                name="submit"
                type="submit"
              >
                Recover password
              </button>

              </form>


            </div>
          </div>
        </div>
      </div>
    </div>
</body>

</html>
