<!DOCTYPE html>
<html>
<link rel="stylesheet" href="css/po.css">

<script>
    function printPageArea(areaID) {
        var printContent = document.getElementById(areaID);
        var WinPrint = window.open('', '', 'width=900,height=650');
        WinPrint.document.write('<link rel="stylesheet" href="css/po.css" type="text/css" />');
        WinPrint.document.write(printContent.innerHTML);
        WinPrint.document.close();
        WinPrint.focus();
        setTimeout(function(){WinPrint.print();},100000);
        WinPrint.print();
        WinPrint.close();
    }
</script>

<div id="printableArea">
<img src="img\ISULOGOBW.png" alt="isu">
    <table class="form">
        <tr>
            <td>
                <b style="padding-right:60px;">Central Stores Purchase Memorandum</b><br>
                Phone: 515-294-5762<br>
                Fax: 515-294-6394
            </td>
            <td>
                Date <input type="text"><br>
                Charge to Central Stores<br>
                Contract ORDER NUMBER <input type="text"><br>
                Deliver to <br>
                From the Dept. of <input type="text"><br>
                Fund Number <input type="text"><br>
            </td>
        </tr>
    </table>

    <table class="form">
        <tr>
            <th>QUANTITY</th>
            <th>ITEMS</th>
            <th>UNIT PRICE</th>
            <th>EXTENSION</th>
        </tr>

        <tr>
            <td><textarea rows="40" cols="10"></textarea></td>
            <td><textarea rows="40" cols="50"></textarea></td>
            <td><textarea rows="40" cols="10"></textarea></td>
            <td><textarea rows="40" cols="10"></textarea></td>
        </tr>
    </table>
    <table>
        <tr class="notice">
            <p>
                <td>
                    <b>PLEASE INCLUDE THE PURCHASE ORDER NUMBER<br>
                        (CIRCLED ABOVE),THE CONTRACT ORDER NUMBER AND<br>
                        A CUSTOMER SIGNED RECEIPT WITH EACH INVOICE.<br>
                        ALL INVOICES AND RECEIPTS SHOULD BE MAILED TO:<br>
                        <br>
                        CENTRAL STORES<br>
                        IOWA STATE UNIVERSITY<br>
                        195 GENERAL SERVICES BUILDING<br>
                        700 WALLACE ROAD<br>
                        AMES, IA 50011-4013</b>
            </p>
            </td>
            <td class="foot">
                <p>
                    IOWA STATE UNIVERSITY
                </p>
                <br>
                <br>
                <p>
                     BY<input type="text">
                     <br><label>Central Stores</label>
                </p>
            </td>
        </tr>
    </table>
</div>

<a href="javascript:void(0);" onclick="printPageArea('printableArea')">Print</a>


</html>