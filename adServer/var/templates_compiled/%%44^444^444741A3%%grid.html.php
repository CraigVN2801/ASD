<?php /* Smarty version 2.6.18, created on 2024-04-17 22:55:24
         compiled from dashboard/grid.html */ ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
    <div id="wrapper" style="max-width: 1200px; margin: 0 auto; padding: 20px; background: #fff; box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);">
        <!-- leftCol -->
        <div id="leftCol" class="groupWrapper toolbarWrapper" style="display: inline-block; vertical-align: top; padding: 10px;">
            <div class="widgetFrame" style="background: #f5f5f5; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
                <div class="widgetLeft">
                    <div class="widgetRight">
                        <div class="widgetCenter">
                            <div class="widgetBody">
                                <div class="widgetHandle">
                                    <div class="widgetTitle" style="font-size: 24px; text-align: center;">
                                        Your Statistics
                                    </div>
                                    <div class="widgetButtons">
                                        <div class="widgetButtonContainer widgetButtonClose">
                                            <div class="close widgetIcon"></div>
                                            <div class="lock widgetIcon"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widgetContent">
                                    <iframe src="<?php echo $this->_tpl_vars['dashboardURL']; ?>
?widget=GraphOAP" name="f_w3" id="f_w3" frameborder="0" allowTransparency="true"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- middleCol -->
        <div id="middleCol" class="groupWrapper toolbarWrapper" style="display: inline-block; vertical-align: top; padding: 10px;">
            <div class="widgetFrame" style="background: #f5f5f5; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
                <div class="widgetLeft">
                    <div class="widgetRight">
                        <div class="widgetCenter">
                            <div class="widgetBody">
                                <div class="widgetHandle">
                                    <div class="widgetTitle" style="font-size: 24px; text-align: center;">
                                        Campaign Overview
                                    </div>
                                    <div class="widgetButtons">
                                        <div class="widgetButtonContainer widgetButtonClose">
                                            <div class="close widgetIcon"></div>
                                            <div class="lock widgetIcon"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widgetContent">
                                    <iframe src="<?php echo $this->_tpl_vars['dashboardURL']; ?>
?widget=CampaignOverview" name="f_w7" id="f_w7" frameborder="0" allowTransparency="true" width="500" height="320"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- rightCol -->
        <div id="rightCol" class="groupWrapper toolbarWrapper" style="display: inline-block; vertical-align: top; padding: 10px;">
            <div class="widgetFrame" style="background: #f5f5f5; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
                <div class="widgetLeft">
                    <div class="widgetRight">
                        <div class="widgetCenter">
                            <div class="widgetBody">
                                <div class="widgetHandle">
                                    <div class="widgetTitle" style="font-size: 24px; text-align: center;">
                                        Audit Trail
                                    </div>
                                    <div class="widgetButtons">
                                        <div class="widgetButtonContainer widgetButtonClose">
                                            <div class="close widgetIcon"></div>
                                            <div class="lock widgetIcon"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widgetContent">
                                    <iframe src="<?php echo $this->_tpl_vars['dashboardURL']; ?>
?widget=Audit" name="f_w6" id="f_w6" frameborder="0" allowTransparency="true"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['jsURL']; ?>
/dashboard.js" ></script>
    <script type="text/javascript">
        var DASHBOARD_SETTINGS_COOKIE_NAME = "openx.dashboard.settings";
        var dashboard = new Dashboard(false);
        <?php echo '
        document.addEventListener("DOMContentLoaded", function() {
            initDashboard();
        });
        '; ?>

    </script>
</body>
</html>