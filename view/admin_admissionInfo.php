<?php 
        include('admin_header.php');
    ?>
         <table border="1">
                    <tr>
                        <td align="left" width="375px">
                            <form method="POST" action="../controller/admissiondate_validation.php">
                                <fieldset>
                                    <legend>Admission Test Date Publishing </legend>
                                    <table>
                                        <tr>
                                            <td>Admission Date</td>
                                            <td>:
                                                <input type="date" name="admissionDate" id="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><hr></td>
                                        </tr>
                                        <tr>
                                            <td>Time</td>
                                            <td>:
                                                <input type="time" name="admissionTime" id="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><hr></td>
                                        </tr>
                                        <tr>
                                            <td>Class</td>
                                            <td>:
                                                <select name="admissionclass" id="">
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><hr></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="submit" name="Post" id="">
                                                <input type="reset" name="Reset" id="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><hr></td>
                                        </tr>
                                    </table>
                                </fieldset>
                            </form>
                            
                            
                        </td>
                        
                    </tr>
                </table>

    <?php 
        include('admin_footer.php');
    ?>