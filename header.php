<style>
.header button {
	border: none;
	background-color: #1c8adb;
	color: #fff;
	border-radius: 5px;
	cursor: pointer;
}
</style>
<header>
    <table class="header" width="100%">
        <td width="20%" style="text-align:right;">

        <td width="60%">
            <h1 style="color: white; text-align:center;">TeamBond</h1>
        </td>
        <td width="20%" style="text-align:right;">
        <span style="color:white;text-align:right; padding-right:25px;">Login <a href="view_profile.php?user_name=<?=$user_name?>" style="color:white"><?=$user_name?></a></span>
        <a href="index.php" style="padding-right:15px;"><button>Sign Out</button></a>
        </td>
    </table>    
</header>