<?php /* Smarty version 2.6.18, created on 2013-07-01 16:19:15
         compiled from Maillists/ListViewEntries.tpl */ ?>


<form name="uploadform" method="POST" ENCTYPE="multipart/form-data" action="uploadfileInfo.php" style="margin:0px">
		<input type="hidden" name="module" value="Maillists">
		<input type="hidden" name="action" value="uploadfileInfo">
		<input type="hidden" name="record" value="">
        <input id="viewname" name="viewname" type="hidden" value="">
				<!-- List View Master Holder starts -->
				<table class="table table-bordered table-hover table-condensed table-striped">
				  <tr>
				   <td>
              		   <table class="table table-bordered">
                          <tr>
                          	<td bgcolor="#EFEFEF" align="center"  width="20%" valign="top">
                              <table class="table table-bordered ">
								<tbody>
                                
                                <tr>
                                <td>
                                 <p><br>
                                    <font style="font-size:14px;margin-left:5px;"><a class="hdrLink" href="index.php?action=Maillists&module=Relsettings&parenttab=settings"><b>>>查看群发统计</b></a></font>
                                <br><br>
                                  1.选择分组，添加该分组所有客户至接收人Email。<br><br>
                           		  2.如果没有你需要的分组，可自行创建新分组。<br><br>
                                  3.群发前，请先到<b>控制面板</b>-><b>相关设置</b>中设置SMTP服务器。<br><br>
                                  4.群发前，请先到客户中创建一个自己的客户，再修改测试分组中会员名，测试发送给自己。<br><br>
                                  5.带附件的邮件发送，会较慢，请耐心等待，不要重复点击发送。<br><br>
                                  6.邮件为空的用户,不显示。<br><br>
				                  7.邮件发送结束后，可点击<a href="index.php?action=index&relset=Maillists&module=Relsettings">群发统计</a>查看发送情况。<br><br><br>

                                  
                                  <!-- 7.<b>5天</b>内发送过1次邮件或<b>一月</b>内发送过4次邮件的客户，自动过滤。-->
                                  </p>
                                </td>
                                </tr>
                                </tbody>
                                </table>
                            </td>
                            <td  valign="top" bgcolor="#EFEFEF" align="center" width="25%">
                              <table class="table table-bordered">
								<tbody>
                                <tr>
                                <td>
                                <p align="center">
                                <b>
                                &nbsp;接收人Email
                                <br>
                                </b>
                                <font color="#808080">每行一个邮件</font>
                                </p>
                                </td>
                                </tr>
                                <tr>
                                <td valign="top">
                                <p align="center">
                                <textarea style="width: 300px; height: 410px;" cols="35" name="dst" rows="8" id="receiveaccountinfo" ><?php echo $this->_tpl_vars['receiveaccountinfo']; ?>
</textarea>
                                </p>
                                </td>
                                </tr>
                                </tbody>
                                </table>
                             </td>
                            <td valign="top" bgcolor="#EFEFEF" align="center" >
                                <table class="table table-bordered">
                                <tbody>
                                <tr>
                                <td>
                                <p align="center">
                                <b>
                                <font color="#000000">&nbsp;邮件信息</font> <br>
                                </b>
                                </p>
                                </td>
                                </tr>
                                <tr>
                                <td>
                                <b>发&nbsp;&nbsp;件&nbsp;&nbsp;人: &nbsp;
                               
                                <font color=red><?php if ($this->_tpl_vars['from_name'] != ''): ?>"<?php echo $this->_tpl_vars['from_name']; ?>
"<?php endif; ?> &nbsp;
                                <?php if ($this->_tpl_vars['from_email'] != ''): ?>(<?php echo $this->_tpl_vars['from_email']; ?>
)<?php endif; ?></font></b> 
                                
                                <input name="from_name" id="from_name" value="<?php echo $this->_tpl_vars['from_name']; ?>
" type="hidden">
                                <input name="from_email" id="from_email" value="<?php echo $this->_tpl_vars['from_email']; ?>
" type="hidden">
                                </td>
                                </tr>
                                <tr>
                                <td>
                                <b>邮件主题:</b><input name="subject" type="text" id="subject" class="txtBox" value="">
                                <input title="选择Email模版" class="btn btn-small btn-primary" onclick="SelectTmp();" type="button" name="button" value=" 选择Email模版  ">
                               <input class="btn btn-small btn-primary" type="button" onclick="CreateTmp();" name="profile" value="新增模版">
                                </td>
                                </tr>
                                <tr>
                                <td valign="top" >
                                <p align="left">
                               <b> 邮件内容:</b>
                               <br />
                                <textarea rows="15"  name="mailcontent" id="mailcontent" style="width:700px;height:275px;"></textarea>
                                </p>
                				<input type="button" name="savebutton" id="savebutton" value="&nbsp;&nbsp;&nbsp;&nbsp;群发&nbsp;&nbsp;&nbsp;&nbsp; "   class="btn btn-primary" onclick="SendMailToAll('Maillists','<?php echo $this->_tpl_vars['sjid']; ?>
','KE');return false;" />
                                </td>
                                </tr>
                                <tr>
                                <td>
								<!--
                                <input type="button" value=" 上传附件 " class="crmbutton small edit" onclick="window.open('index.php?module=Maillists&action=Popup_upload&sjid=<?php echo $this->_tpl_vars['sjid']; ?>
','uploadtemplate','top=100,left=200,height=200,width=500,menubar=no,addressbar=no,status=yes')">
                                -->
								<input type="hidden" value="<?php echo $this->_tpl_vars['sjid']; ?>
" name="sjid" id="sjid" />
                                </td>
                                </tr>
                                <!-- <tr>
                                <td>
                                <div id="maillistattinfo" ></div>
                                </td>
                                </tr>
                                <tr  valign="bottom">
                                <td  style="text-align:center; vertical-align:bottom;padding-top:50px;">
                                 
                                </td>
                                </tr> -->
                                </tbody>
                                </table>
                            </td>
                           
                            </tr>
               		   </table>
		           </td>
		   	      </tr>
	           </table>
</form>