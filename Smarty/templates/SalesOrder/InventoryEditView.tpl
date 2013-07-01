<script type="text/javascript" src="modules/{$MODULE}/{$SINGLE_MOD}.js"></script>

{*<!-- Contents -->*}
{include file='EditViewHidden.tpl'}

<!-- center start -->
     <div class="container-fluid" style="height:608px;">
        <div class="row-fluid">
          
          <div class="span12" style="margin-left:0px;">
             <div  class="pull-left" style="margin-bottom:5px;" >
                  <button class="btn btn-small btn-primary" style="margin-top:2px;" onclick="goback();">
                    <i class="icon-arrow-left icon-white"></i>取消</button>
              </div>
              <div class="pull-right" style="margin-bottom:5px;" >
                  <button class="btn btn-small btn-success" style="margin-top:2px;" onclick="this.form.action.value='Save';validateInventory('{$MODULE}')" name="savebutton">
                    <i class="icon-ok icon-white"></i> 保存 </button>
                 
             </div>
             <div class="clearfix"></div>
              <div class="accordion"  style="margin-top:0px;margin-bottom:0px;overflow:auto;height:550px;">
              	{foreach key=header item=data from=$BLOCKS}
                  <div class="accordion-group">
                     <div class="accordion-heading">
                      <a class="accordion-toggle" data-toggle="collapse"  href="#detailOne">
                        {$header}
                      </a>
                    </div>
                    <div id="detailOne" class="accordion-body collapse in">
                      <div class="accordion-inner">
                          <table class="table table-bordered table-hover table-condensedforev dvtable">
                           <tbody>
                            {include file="DisplayFields.tpl"}
                           </tbody>
                          </table>
                     </div>
                   </div>
                  </div>
                  {/foreach}
                  {if $APPIN_PROCESS eq ''}
                  <div>
					   <table class="table table-bordered table-condensedforev dvtable">
						   <tr>
							<td colspan=4>
								{include file="SalesOrder/ProductDetailsEditView.tpl"}
							</td>
						   </tr>
					   </table>
					   {else}
					   <table class="table table-bordered  table-condensedforev dvtable">
						   <tr>
							<td colspan=4>
								{include file="SalesOrder/ProductInfo.tpl"}
							</td>
						    </tr>
						</table>
					</div>
					{/if}
              </div>
             
            
          </div>
        </div>
     </div>
     <!-- center end -->
</form>

<script>	
        var fieldname = new Array({$VALIDATION_DATA_FIELDNAME})
        var fieldlabel = new Array({$VALIDATION_DATA_FIELDLABEL})
        var fielddatatype = new Array({$VALIDATION_DATA_FIELDDATATYPE})
		if(getObj("subject") != undefined) {ldelim}
			if(getObj("subject").value == "") {ldelim}
				getObj("subject").value = "{$APP.AUTO_GEN_CODE}";
				getObj("subject").setAttribute("readOnly","true");
			{rdelim}
			else {ldelim}
				getObj("subject").setAttribute("readOnly","true");
			{rdelim}
		{rdelim}


</script>
 