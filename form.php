<form id="form1" class="forms" action="MAILTO:abc@gmail.com" method="post" enctype="text/plain">
            <fieldset>
              <ol>
                <li class="form-row text-input-row">
                  <label>Name*</label>
                  <input type="text" name="name" value="" class="text-input required" title="" />
                </li>
                <li class="form-row text-input-row">
                  <label>Mobile*</label>
                  <input type="text" name="Mobile" value="" class="text-input required" title="" />
                </li>
                <!--<li class="form-row text-input-row">
                  <label>Email*</label>
                  <input type="text" name="email" value="" class="text-input required email" title="" />
                </li>-->
                <li class="form-row text-area-row">
                  <textarea name="message" style="height:50px" class="text-area required"></textarea>
                </li>
                <li class="form-row hidden-row">
                  <input type="hidden" name="hidden" value="" />
                </li>
                <li class="button-row">

          <input id="Submit1" type="submit" value="submit" class="btn-submit" />
                <!-- <input type="submit" value="send" name="submit" class="btn-submit" />-->
                </li>
              </ol>
              <input type="hidden" name="v_error" id="v-error" value="Required" />
              <input type="hidden" name="v_email" id="v-email" value="Enter a valid email" />
            </fieldset>
          </form>