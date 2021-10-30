<?php
$title ="Tidrapporter";
?>

<body class="container">
    <form class="form-filter" id="filter-form">
        <div class="container paper">
            <h2 class="page-title">Tidrapporter</h2>
            <div class="container">
                <label class="item-6">
                    <p>Arbetsplats</p>
                    <select name="workplace">
                        <option disabled selected="selected">Välj en arbetsplats</option>
                    </select>
                </label>
            </div>
            <div class="container">
                <label class="item-6">
                    <p>Från</p>
                    <input type="date" name="from_date" />
                </label>
                <label class="item-6">
                    <p>Till</p>
                    <input type="date" name="to_date" />
                </label>
            </div>
        </div>
    </form>
    <div class="container paper table-container">
        <table>
            <thead>
                <tr>
                    <th>
                        Datum
                    </th>
                    <th>
                        Arbetsplatsnamn
                    </th>
                    <th>
                        Timmar
                    </th>
                </tr>
            </thead>
            <tbody id="time-reports">
            </tbody>
        </table>
    </div>
</body>
<script>
<?php 
    require("script.js");
?>
</script>