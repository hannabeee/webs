<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - Inventory Management System</title>
    <link rel="stylesheet" type="text/css" href="dash.css">
    <script src="https://use.fontawesome.com/0c7a3095b5.js"></script>
</head>
<body>
    <div id="dashboardMainContainer">
        <div class="dashboard_sidebar">
            <h3 class="dashboard_logo">CPIS</h3>
            <div class="dashboard_sidebar_user">
                <img src="logo.jpg" alt="User Image" />
              
            </div>
            <div class="dashboard_sidebar_menus">
                <ul class="dashboard_menu_lists">
					<li class="menuActive">
                        <a href=""><i class="fa fa-dashboard"></i>Dashboard</a>
					</li>
					<li>
                        <a href=""><i class="fa fa-clipboard"></i>Items</a>
					</li>
                    <li>
                        <a href=""><i class="fa fa-contacts"></i>Borrower</a>
					</li>
                    <li>
                        <a href=""><i class="fa fa-arrow-down"></i>Return</a>
					</li>
                    <li>
                        <a href=""><i class="fa fa-moon"></i>Darkmode</a>
					</li>
                </ul>
            </div>
        </div>
        <div class="dashboard_content_container">
            <div class="dashboard_topNav">
                <a href="" id=toggleBtn><i class="fa fa-navicon"></i></a>
                <a href="" id="logoutBtn"><i class="fa fa-power-off"></i>Log-out</a>
            </div>
            <div class="dashboard_content">
                <div class="dashboard_content_main">
				</div>
            </div>
        </div>
    </div>
<script>
	toggleBtn.addEvenListener('click', () => {
		alert(hi);
	});
</script>
</body>
</html>