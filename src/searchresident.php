<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <input type="radio" name="searchBy" value="searchByName" <?php if($searchBy == 'searchByName') echo 'checked'; ?>>Search by name
  <span class="error"><?php echo $searchByErr; ?></span>
  <br>

      <table>

        <tr>
          <td class="userinfo-column1">Given Name:</td>
          <td class="userinfo-columnn"><input class="userinfo" name="givenName" type="text" id="givenName" value="<?php echo $givenName; ?>"></td>
        </tr>

        <tr>
          <td>Family Name:</td>
          <td><input class="userinfo" name="familyName" type="text" id="familyName" value="<?php echo $familyName; ?>"></td>
        </tr>

      </table>


  <input type="radio" name="searchBy" value="searchByRoom" <?php if($searchBy == 'searchByRoom') echo 'checked'; ?>>Search by room
  <span class="error"><?php echo $searchByErr; ?></span>
  <br>


      <table>

        <tr>
          <td class="userinfo-column1">Room:</td>
          <td class="userinfo-columnn"><select name="room" id="room">

            <!-- Empty -->

            <option value=""></option>

            <!-- East Wing -->

            <option value="E01" <?php if($room == "E01") {echo 'selected';} ?> >E01</option>
            <option value="E05" <?php if($room == "E05") {echo 'selected';} ?> >E05</option>
            <option value="E06" <?php if($room == "E06") {echo 'selected';} ?> >E06</option>
            <option value="E07" <?php if($room == "E07") {echo 'selected';} ?> >E07</option>
            <option value="E08" <?php if($room == "E08") {echo 'selected';} ?> >E08</option>
            <option value="E09" <?php if($room == "E09") {echo 'selected';} ?> >E09</option>
            <option value="E10" <?php if($room == "E10") {echo 'selected';} ?> >E10</option>
            <option value="E11" <?php if($room == "E11") {echo 'selected';} ?> >E11</option>
            <option value="E12" <?php if($room == "E12") {echo 'selected';} ?> >E12</option>
            <option value="E14" <?php if($room == "E14") {echo 'selected';} ?> >E14</option>
            <option value="E15" <?php if($room == "E15") {echo 'selected';} ?> >E15</option>
            <option value="E16" <?php if($room == "E16") {echo 'selected';} ?> >E16</option>
            <option value="E17" <?php if($room == "E17") {echo 'selected';} ?> >E17</option>
            <option value="E18" <?php if($room == "E18") {echo 'selected';} ?> >E18</option>
            <option value="E19" <?php if($room == "E19") {echo 'selected';} ?> >E19</option>
            <option value="E20" <?php if($room == "E20") {echo 'selected';} ?> >E20</option>
            <option value="E21" <?php if($room == "E21") {echo 'selected';} ?> >E21</option>

           
            <!-- West Wing -->

            <option value="W01" <?php if($room == "W01") {echo 'selected';} ?> >W01</option>
            <option value="W02" <?php if($room == "W02") {echo 'selected';} ?> >W02</option>
            <option value="W03" <?php if($room == "W03") {echo 'selected';} ?> >W03</option>
            <option value="W05" <?php if($room == "W05") {echo 'selected';} ?> >W05</option>
            <option value="W06" <?php if($room == "W06") {echo 'selected';} ?> >W06</option>
            <option value="W07" <?php if($room == "W07") {echo 'selected';} ?> >W07</option>
            <option value="W08" <?php if($room == "W08") {echo 'selected';} ?> >W08</option>
            <option value="W09" <?php if($room == "W09") {echo 'selected';} ?> >W09</option>
            <option value="W10" <?php if($room == "W10") {echo 'selected';} ?> >W10</option>
            <option value="W11" <?php if($room == "W11") {echo 'selected';} ?> >W11</option>
            <option value="W12" <?php if($room == "W12") {echo 'selected';} ?> >W12</option>
            <option value="W14" <?php if($room == "W14") {echo 'selected';} ?> >W14</option>
            <option value="W15" <?php if($room == "W15") {echo 'selected';} ?> >W15</option>
            <option value="W16" <?php if($room == "W16") {echo 'selected';} ?> >W16</option>
            <option value="W18" <?php if($room == "W18") {echo 'selected';} ?> >W18</option>
            <option value="W20" <?php if($room == "W20") {echo 'selected';} ?> >W20</option>


            <!-- South Wings -->

            <option value="S03" <?php if($room == "S03") {echo 'selected';} ?> >S03</option>
            <option value="S04" <?php if($room == "S04") {echo 'selected';} ?> >S04</option>
            <option value="S05" <?php if($room == "S05") {echo 'selected';} ?> >S05</option>
            <option value="S06" <?php if($room == "S06") {echo 'selected';} ?> >S06</option>
            <option value="S07" <?php if($room == "S07") {echo 'selected';} ?> >S07</option>
            <option value="S08" <?php if($room == "S08") {echo 'selected';} ?> >S08</option>
            <option value="S09" <?php if($room == "S09") {echo 'selected';} ?> >S09</option>
            <option value="S10" <?php if($room == "S10") {echo 'selected';} ?> >S10</option>
            <option value="S11" <?php if($room == "S11") {echo 'selected';} ?> >S11</option>
            <option value="S12" <?php if($room == "S12") {echo 'selected';} ?> >S12</option>
            <option value="S22" <?php if($room == "S22") {echo 'selected';} ?> >S22</option>
            <option value="S23" <?php if($room == "S23") {echo 'selected';} ?> >S23</option>
            <option value="S24" <?php if($room == "S24") {echo 'selected';} ?> >S24</option>
            <option value="S25" <?php if($room == "S25") {echo 'selected';} ?> >S25</option>
            <option value="S26" <?php if($room == "S26") {echo 'selected';} ?> >S26</option>
            <option value="S27" <?php if($room == "S27") {echo 'selected';} ?> >S27</option>
            <option value="S28" <?php if($room == "S28") {echo 'selected';} ?> >S28</option>
            <option value="S29" <?php if($room == "S29") {echo 'selected';} ?> >S29</option>
            <option value="S30" <?php if($room == "S30") {echo 'selected';} ?> >S30</option>
            <option value="S31" <?php if($room == "S31") {echo 'selected';} ?> >S31</option>
            <option value="S32" <?php if($room == "S32") {echo 'selected';} ?> >S32</option>
            </select>
          </td>
        </tr>


      </table>

      <br>

      <table>
        <tr>
          <td class='userinfo-column1 userinfo-left'><button type="button" onclick="window.location.href='./home.php'">Back</button></td>
          <td class='userinfo-columnn userinfo-right'><input name="searchResident" type="submit" id="searchResident" value="Search Resident"></td>
          <td class='userinfo-columnn'></td>
        </tr>
      </table>

</form>
