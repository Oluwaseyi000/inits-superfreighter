<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
    <section style="margin: 20px 0 0 20px">
        <h6>Key</h6>
        <div> <span style="color:#e02025">&#9632;</span> <span>taken</span></div>

    </section>
    <div class="container m-auto">
       <img src="{{asset('adigun-map.png')}}" id="map-image" style="width: 984px; max-width: 100%; height: auto;" alt=""
            usemap="#adigun-map" /> 
  
        <map name="adigun-map">
            
            <area shape="poly" coords="1104,714,1161,749,1110,817,1097,825,1083,819,1044,788" href="#"
                alt="Block 1 - Plot 1 (995.85sqm)" title="b1-p1" data-key="b1-p1"   onclick="Popup('b1-p1')"/>
            <area shape="poly" coords="1050,674,1102,710,1042,792,992,745" href="#"
                alt="Block 1 - Plot 2 (995.85sqm)" title="b1-p2" data-key="b1-p2"   onclick="Popup('b1-p2')"/>
            <area shape="poly" coords="998,633,1052,672,988,747,937,707" href="#"
                alt="Block 1 - Plot 3 (995.85sqm)" title="b1-p3" data-key="taken" class="taken"/>
            <area shape="poly" coords="943,590,994,631,937,707,881,670" href="#"
                alt="Block 1 - Plot 4 (995.85sqm)" title="b1-p4" data-key="b1-p4"  onclick="Popup('b1-p4')"/>
            <area shape="poly" coords="889,547,947,586,879,668,831,623" href="#"
                alt="Block 1 - Plot 5 (995.85sqm)" title="b1-p5" data-key="b1-p5"  onclick="Popup('b1-p5')"/>
            <area shape="poly" coords="838,509,891,545,827,623,778,580,836,507" href="#"
                alt="Block 1 - Plot 6 (995.85sqm)" title="b1-p6" data-key="taken" class="taken"/>
            <area shape="poly" coords="774,460,833,505,778,582,732,551,743,526,732,511"
                href="#" alt="Block 1 - Plot 7 (1106.80sqm)" title="b1-p7" data-key="b1-p7"  onclick="Popup('b1-p7')"/>

            <area shape="poly" coords="968,899,1017,936,965,1007,951,1011,904,982" href="#"
                alt="Block 2 - Plot 1 (994.63sqm)" title="b2-p1" data-key="b2-p1"  onclick="Popup('b2-p1')"/>
            <area shape="poly" coords="916,858,967,895,906,978,852,938" href="#"
                alt="Block 2 - Plot 2 (1000.00sqm)" title="b2-p2" data-key="b2-p2"  onclick="Popup('b2-p2')"/>
            <area shape="poly" coords="860,817,914,856,850,940,802,897" href="#"
                alt="Block 2 - Plot 3 (1000.00sqm)" title="b2-p3" data-key="b2-p3"  onclick="Popup('b2-p3')"/>
            <area shape="poly" coords="809,778,862,815,798,897,751,858" href="#"
                alt="Block 2 - Plot 4 (1000.00sqm)" title="b2-p4" data-key="b2-p4"  onclick="Popup('b2-p4')"/>
            <area shape="poly" coords="706,747,786,806,745,860,672,806,670,786" href="#"
                alt="Block 2 - Plot 5 (1022.97sqm)" title="b2-p5" data-key="b2-p5"  onclick="Popup('b2-p5')"/>
            <area shape="poly" coords="708,742,753,691,829,745,786,806" href="#"
                alt="Block 2 - Plot 6 (1024.94sqm)" title="b2-p6" data-key="b2-p6"  onclick="Popup('b2-p6')"/>
            <area shape="poly" coords="753,689,782,652,802,633,871,693,829,749" href="#"
                alt="Block 2 - Plot 7 (1013.87sqm)" title="b2-p7" data-key="b2-p7"  onclick="Popup('b2-p7')"/>
            <area shape="poly" coords="873,697,928,738,864,813,811,775" href="#"
                alt="Block 2 - Plot 8 (1000.00sqm)" title="b2-p8" data-key="b2-p8"  onclick="Popup('b2-p8')"/>
            <area shape="poly" coords="928,736,976,773,914,854,866,817" href="#"
                alt="Block 2 - Plot 9 (1000.00sqm)" title="b2-p9" data-key="b2-p9"  onclick="Popup('b2-p9')"/>
            <area shape="poly" coords="980,778,1029,815,968,895,916,856" href="#"
                alt="Block 2 - Plot 10 (1000.00sqm)" title="b2-p10" data-key="b2-p10"  onclick="Popup('b2-p10')"/>
            <area shape="poly" coords="968,897,1017,938,1073,870,1075,848,1033,817" href="#"
                alt="Block 2 - Plot 11 (994.63sqm)" title="b2-p11" data-key="b2-p11"  onclick="Popup('b2-p11')"/>

            <area shape="poly" coords="786,1514,792,1528,738,1596,644,1528" href="#"
                alt="Block 3 - Plot 1 (968.14sqm)" title="b3-p1" data-key="b3-p1"  onclick="Popup('b3-p1')"/>
            <area shape="poly" coords="609,1378,553,1450,520,1431,491,1409,549,1335" href="#"
                alt="Block 3 - Plot 2 (1025.55sqm)" title="b3-p2" data-key="b3-p2"  onclick="Popup('b3-p2')"/>
            <area shape="poly" coords="491,1291,549,1332,491,1407,433,1367" href="#"
                alt="Block 31 - Plot 3 (1041.38sqm)" title="b3-p3" data-key="b3-p3"  onclick="Popup('b3-p3')"/>
            <area shape="poly" coords="433,1246,493,1293,433,1365,373,1322" href="#"
                alt="Block 3 - Plot 4 (1043.21sqm)" title="b3-p4" data-key="b3-p4"  onclick="Popup('b3-p4')"/>
            <area shape="poly" coords="373,1202,433,1244,377,1318,318,1273" href="#"
                alt="Block 3 - Plot 5 (1033.62sqm)" title="b3-p5" data-key="b3-p5"  onclick="Popup('b3-p5')"/>
            <area shape="poly" coords="311,1153,371,1202,314,1275,278,1244,256,1225" href="#"
                alt="Block 3 - Plot 6 (1089.93sqm)" title="b3-p6" data-key="b3-p6"  onclick="Popup('b3-p6')"/>
            <area shape="poly" coords="270,1120,312,1149,252,1223,229,1202,186,1184,161,1170" href="#"
                alt="Block 3 - Plot 7 (1066.44sqm)" title="b3-p7" data-key="b3-p7"  onclick="Popup('b3-p7')"/>
            <area shape="poly" coords="262,1091,274,1116,157,1169,99,1110,134,1070" href="#"
                alt="Block 3 - Plot 8 (1515.34sqm)" title="b3-p8" data-key="b3-p8"  onclick="Popup('b3-p8')"/>
            <area shape="poly" coords="200,984,279,1044,268,1064,260,1087,136,1066" href="#"
                alt="Block 3 - Plot 9 (1230.25sqm)" title="b3-p9" data-key="b3-p9"  onclick="Popup('b3-p9')"/>
            <area shape="poly" coords="241,930,318,994,281,1044,200,980" href="#"
                alt="Block 3 - Plot 10 (1000.00sqm)" title="b3-p10" data-key="b3-p10"  onclick="Popup('b3-p10')"/>
            <area shape="poly" coords="278,877,361,940,320,992,239,928" href="#"
                alt="Block 3 - Plot 11 (1103.32sqm)" title="b3-p11" data-key="b3-p11"  onclick="Popup('b3-p11')"/>
            <area shape="poly" coords="328,811,400,899,382,912,361,938,279,874" href="#"
                alt="Block 3 - Plot 12 (1035.61sqm)" title="b3-p12" data-key="b3-p12"  onclick="Popup('b3-p12')"/>
            <area shape="poly" coords="415,784,435,883,406,901,330,811,336,794" href="#"
                alt="Block 3 - Plot 13 (1024.80sqm)" title="b3-p13" data-key="b3-p13"  onclick="Popup('b3-p13')"/>
            <area shape="poly" coords="479,773,499,874,433,883,419,776,479,773" href="#"
                alt="Block 3 - Plot 14 (1000.01sqm)" title="b3-p14" data-key="b3-p14"  onclick="Popup('b3-p14')"/>
            <area shape="poly"
                coords="524,759,602,821,592,839,578,850,561,858,538,868,503,872,487,771"
                href="#" alt="Block 3 - Plot 15 (1249.88sqm)" title="b3-p15" data-key="b3-p15"  onclick="Popup('b3-p15')"/>
            <area shape="poly" coords="567,707,644,771,602,823,524,757" href="#"
                alt="Block 3 - Plot 16 (1000.00sqm)" title="b3-p16" data-key="b3-p16"  onclick="Popup('b3-p16')"/>
            <area shape="poly" coords="609,652,685,724,644,769,569,707" href="#"
                alt="Block 3 - Plot 17 (1000.00sqm)" title="b3-p17" data-key="b3-p17"  onclick="Popup('b3-p17')"/>
            <area shape="poly" coords="652,604,728,672,687,724,611,652" href="#"
                alt="Block 3 - Plot 18 (1000.00sqm)" title="b3-p18" data-key="b3-p18"  onclick="Popup('b3-p18')"/>
            <area shape="poly" coords="695,559,761,606,771,621,734,672,654,606" href="#"
                alt="Block 3 - Plot 19(1035.61)" title="b3-p19" data-key="b3-p19"  onclick="Popup('b3-p19')"/>

            <area shape="poly" coords="695,856,739,883,747,903,687,978,631,938" href="#"
                alt="Block 4 - Plot 1 (1108.78sqm)" title="b4-p1" data-key="b4-p1"  onclick="Popup('b4-p1')"/>
            <area shape="poly" coords="586,903,687,980,652,1027,553,945" href="#"
                alt="Block 4 - Plot 2 (1081.25sqm)" title="b4-p2" data-key="b4-p2"  onclick="Popup('b4-p2')"/>
            <area shape="poly" coords="654,1023,617,1071,516,998,551,951" href="#"
                alt="Block 4 - Plot 3 (1085.12sqm)" title="b4-p3" data-key="b4-p3"  onclick="Popup('b4-p3')"/>
            <area shape="poly" coords="514,998,615,1071,582,1120,481,1042" href="#"
                alt="Block 4 - Plot 4 (1085.12sqm)" title="b4-p4" data-key="b4-p4"  onclick="Popup('b4-p4')"/>
            <area shape="poly" coords="582,1120,547,1165,443,1089,481,1042" href="#"
                alt="Block 4 - Plot 5 (1085.12sqm)" title="b4-p5" data-key="b4-p5"  onclick="Popup('b4-p5')"/>
            <area shape="poly" coords="543,1165,499,1227,483,1240,468,1238,431,1207,493,1128" href="#"
                alt="Block 4 - Plot 6 (994.71sqm)" title="b4-p6" data-key="b4-p6"  onclick="Popup('b4-p6')"/>
            <area shape="poly" coords="443,1085,497,1124,431,1205,382,1167" href="#"
                alt="Block 4 - Plot 7 (960.01sqm)" title="b4-p7" data-key="b4-p7"  onclick="Popup('b4-p7')"/>
            <area shape="poly" coords="392,1050,441,1087,378,1170,330,1132" href="#"
                alt="Block 4 - Plot 8 (959.33sqm)" title="b4-p8" data-key="b4-p8"  onclick="Popup('b4-p8')"/>
            <area shape="poly" coords="340,1009,394,1050,330,1128,287,1101,289,1073" href="#"
                alt="Block 4 - Plot 9 (982.74sqm)" title="b4-p9" data-key="b4-p9"  onclick="Popup('b4-p9')"/>
            <area shape="poly" coords="377,965,479,1040,446,1085,347,1011" href="#"
                alt="Block 4 - Plot 10 (1090.14sqm)" title="b4-p10" data-key="b4-p10"  onclick="Popup('b4-p10')"/>
            <area shape="poly" coords="419,920,510,994,479,1038,378,961,400,930" href="#"
                alt="Block 4 - Plot 11 (1083.39sqm)" title="b4-p11" data-key="b4-p11"  onclick="Popup('b4-p11')"/>
            <area shape="poly"
                coords="567,885,582,901,516,994,421,918,493,901"
                href="#" alt="Block 4 - Plot 12 (1273.36sqm)" title="b4-p12"data-key="b4-p12"  onclick="Popup('b4-p12')" />
            <area shape="poly"
                coords="695,854,633,930,567,885,586,874,613,850,635,823,646,819"
                href="#" alt="Block 4 - Plot 13 (1034.28sqm)" title="b4-p13" data-key="b4-p13"  onclick="Popup('b4-p13')"/>
            
            <area shape="poly"  href="#"
                alt="Block 5 - Plot 1 (994.63sqm)" title="b5-p1" coords="856,976,922,1023,934,1048,901,1095,817,1029" data-key="b5-p1"  onclick="Popup('b5-p1')"/>
            <area shape="poly" coords="817,1027,895,1091,860,1145,778,1079" href="#"
                alt="Block 5 - Plot 2 (1000.00sqm)" title="b5-p2" data-key="b5-p2"  onclick="Popup('b5-p2')"/>
            <area shape="poly" coords="774,1077,854,1143,815,1196,737,1132" href="#"
                alt="Block 5 - Plot 3 (1000.00sqm)" title="b5-p3" data-key="b5-p3"  onclick="Popup('b5-p3')"/>
            <area shape="poly" coords="738,1132,815,1196,776,1250,697,1184" href="#"
                alt="Block 5 - Plot 4 (1000.00sqm)" title="b5-p4" data-key="b5-p4"  onclick="Popup('b5-p4')"/>
            <area shape="poly" coords="697,1182,778,1250,739,1301,658,1236" href="#"
                alt="Block 5 - Plot 5 (1000.00sqm)" title="b5-p5" data-key="b5-p5"  onclick="Popup('b5-p5')"/>
            <area shape="poly" coords="736,1301,693,1361,673,1378,660,1380,617,1351,685,1260" href="#"
                alt="Block 5 - Plot 6 (1135.44sqm)" title="b5-p6" data-key="b5-p6"  onclick="Popup('b5-p6')"/>
            <area shape="poly" coords="683,1260,629,1219,563,1306,617,1343" href="#"
                alt="Block 5 - Plot 7 (1049.98sqm)" title="b5-p7" data-key="b5-p7"  onclick="Popup('b5-p7')"/>
            <area shape="poly" coords="573,1170,627,1217,557,1304,510,1271,510,1248" href="#"
                alt="Block 5 - Plot 8 (1048.26sqm)" title="b5-p8" data-key="b5-p8"  onclick="Popup('b5-p8')"/>
            <area shape="poly" coords="613,1124,695,1182,658,1235,576,1172" href="#"
                alt="Block 5 - Plot 9 (1000.00sqm)" title="b5-p9" data-key="b5-p9"  onclick="Popup('b5-p9')"/>
            <area shape="poly" coords="654,1070,739,1128,697,1182,615,1120" href="#"
                alt="Block 5 - Plot 10 (1000.00sqm)" title="b5-p10" data-key="b5-p10"  onclick="Popup('b5-p10')"/>
            <area shape="poly" coords="693,1015,776,1079,738,1132,654,1066" href="#"
                alt="Block 5 - Plot 11 (1000.00sqm)" title="b5-p11" data-key="b5-p11"  onclick="Popup('b5-p11')"/>
            <area shape="poly" coords="734,967,815,1025,778,1079,695,1013" href="#"
                alt="Block 5 - Plot 12 (1000.00sqm)" title="b5-p12" data-key="b5-p12"  onclick="Popup('b5-p12')"/>
            <area shape="poly" coords="736,963,815,1025,854,974,798,934,782,920,769,920" href="#"
                alt="Block 5 - Plot 13 (994.63qm)" title="b5-p13" data-key="b5-p13"  onclick="Popup('b5-p13')"/>
            

            <area shape="poly" coords="823,1545,873,1582,813,1662,767,1617" href="#"
                alt="Block 6 - Plot 1 (962.86sqm)" title="b6-p1" data-key="b6-p1"  onclick="Popup('b6-p1')"/>
            <area shape="poly" coords="875,1578,928,1623,864,1702,815,1664" href="#"
                alt="Block 6 - Plot 2 (986.63sqm)" title="b6-p2" data-key="b6-p2"  onclick="Popup('b6-p2')"/>
            <area shape="poly" coords="928,1625,980,1664,920,1745,868,1700" href="#"
                alt="Block 6 - Plot 3 (991.03sqm)" title="b6-p3" data-key="b6-p3"  onclick="Popup('b6-p3')"/>
            <area shape="poly" coords="980,1662,1027,1697,978,1790,918,1739" href="#"
                alt="Block 6 - Plot 4 (1046.54sqm)" title="b6-p4" data-key="b6-p4"  onclick="Popup('b6-p4')"/>
            <area shape="poly" coords="1027,1695,1040,1702,1052,1706,1062,1852,980,1792" href="#"
                alt="Block 6 - Plot 5 (1053.20sqm)" title="b6-p5" data-key="b6-p5"  onclick="Popup('b6-p5')"/>
            <area shape="poly" coords="1054,1704,1067,1700,1091,1695,1128,1809,1081,1869,1064,1854"
                href="#" alt="Block 6 - Plot 6 (1149.73sqm)" title="b6-p6" data-key="b6-p6"  onclick="Popup('b6-p6')"/>
            <area shape="poly" coords="1089,1687,1104,1667,1186,1726,1128,1805" href="#"
                alt="Block 6 - Plot 7 (1015.82sqm)" title="b6-p7" data-key="b6-p7"  onclick="Popup('b6-p7')"/>
            <area shape="poly" coords="1104,1664,1190,1726,1227,1675,1145,1617" href="#"
                alt="Block 6 - Plot 8 (1001.61sqm)" title="b6-p8" data-key="b6-p8"  onclick="Popup('b6-p8')"/>
            <area shape="poly" coords="1147,1613,1188,1561,1269,1623,1230,1675" href="#"
                alt="Block 6 - Plot 9 (1001.61sqm)" title="b6-p9" data-key="b6-p9"  onclick="Popup('b6-p9')"/>
            <area shape="poly" coords="1190,1559,1229,1510,1308,1570,1271,1623" href="#"
                alt="Block 6 - Plot 10 (1003.61sqm)" title="b6-p10" data-key="b6-p10"  onclick="Popup('b6-p10')"/>
            <area shape="poly" coords="1405,1440,1312,1566,1227,1508,1236,1497,1258,1508,1267,1483,1230,1456" href="#"
                alt="Block 6 - Plot 11 (1729.45sqm)" title="b6-p11" data-key="b6-p11"  onclick="Popup('b6-p11')"/>
            <area shape="poly" coords="1225,1466,1159,1553,1064,1479" href="#" alt="Block 6 - Plot 12 (1060.13sqm)"
                title="b6-p12" data-key="b6-p12"  onclick="Popup('b6-p12')"/>
            <area shape="poly" coords="1058,1481,1157,1557,1128,1594,1025,1520,1052,1473" href="#"
                alt="Block 6 - Plot 13 (1018.63sqm)" title="b6-p13" data-key="b6-p13"  onclick="Popup('b6-p13')"/>
            <area shape="poly" coords="1073,1561,1126,1598,1077,1660,1066,1673,1048,1677,1009,1646" href="#"
                alt="Block 6 - Plot 14 (1043.30sqm)" title="b6-p14" data-key="b6-p14"  onclick="Popup('b6-p14')"/>
            <area shape="poly" coords="1027,1522,1073,1559,1007,1644,959,1611" href="#"
                alt="Block 6 - Plot 15 (1060.69sqm)" title="b6-p15" data-key="b6-p15"  onclick="Popup('b6-p15')"/>
            <area shape="poly" coords="984,1491,916,1576,959,1607,1025,1520,1036,1483" href="#"
                alt="Block 6 - Plot 16 (1015.42sqm)" title="b6-p16" data-key="b6-p16"  onclick="Popup('b6-p16')"/>
            <area shape="poly" coords="980,1491,916,1576,827,1506" href="#" alt="Block 6 - Plot 17 (971.89sqm)"
                title="b6-p17" data-key="b6-p17"  onclick="Popup('b6-p17')"/>


               

            
            <!-- block 10 -->
                <area shape="poly" coords="1429,821,1486,864,1435,932,1371,885" href="#"
                    alt="Block 10 - Plot 6 (1002.25sqm)" title="b10-p6" class="taken" data-key="taken"/>
                <area shape="poly" coords="1486,863,1547,910,1496,977,1435,937" href="#"
                    alt="Block 10 - Plot 5 (1007.14sqm)" title="b10-p5" class="taken" data-key="taken"/>
                <area shape="poly" coords="1547,911,1607,955,1567,1009,1550,1016,1526,1002,1496,979" href="#"
                    alt="Block 10 - Plot 4 (998.98sqm)" title="b10-p4" onclick="Popup('b10-p4')" data-key="b10-p4"/>
                <area shape="poly" coords="1601,842,1641,866,1654,883,1648,906,1607,954,1550,910"
                    href="#" alt="Block 10 - Plot 3 (981.69sqm)" title="b10-p3" onclick="Popup('b10-p3')" data-key="b10-p3"/>
                <area shape="poly" coords="1543,792,1597,839,1550,910,1489,863" href="#"
                    alt="Block 10 - Plot 2 (1007.14sqm)" title="b10-p2" onclick="Popup('b10-p2')" data-key="b10-p2"/>
                <area shape="poly" coords="1543,792,1489,863,1429,815,1483,748" href="#"
                    alt="Block 10 - Plot 1 (1002.96sqm)" title="b10-p1" class="taken"  data-key="taken"/>
            <!-- end of block 10 -->

            <!-- start of block 7 -->
            <area shape="poly" coords="1540,679,1503,726,1415,662,1452,608" href="#"
                alt="Block 7 - Plot 23 (1021.15sqm)" title="b7-p23" onclick="Popup('b10-p2')" data-key="b7-p23"/>
            <area shape="poly" coords="1634,753,1601,802,1503,724,1543,681" href="#"
                alt="Block 7 - Plot 22 (1079.69sqm)" title="b7-p22" data-key="b7-p22"  onclick="Popup('b7-p22')"/>
            <area shape="poly" coords="1681,868,1769,858,1638,753,1601,800" href="#"
                alt="Block 7 - Plot 21 (1228.31sqm)" title="b7-p21" data-key="b7-p21" onclick="Popup('b7-p21')"/>
            <area shape="poly" coords="1681,869,1681,890,1675,913,1779,944,1816,893,1769,856" href="#"
                alt="Block 7 - Plot 20 (1183.18sqm)" title="b7-p20" data-key="b7-p20" onclick="Popup('b7-p20')"/>
            <area shape="poly" coords="1648,950,1671,913,1779,947,1729,1011" href="#"
                alt="Block 7 - Plot 19 (1001.02sqm)" title="b7-p19" data-key="b7-p19" onclick="Popup('b7-p19')"/>
            <area shape="poly" coords="1607,1004,1641,954,1729,1014,1688,1065" href="#"
                alt="Block 7 - Plot 18 (1019.96sqm)" title="b7-p18" data-key="taken" class="taken"/>
            <area shape="poly" coords="1567,1055,1604,1008,1692,1068,1644,1115" href="#"
                alt="Block 7 - Plot 17 (1000.00sqm)" title="b7-p17" data-key="b7-p17" onclick="Popup('b7-p17')"/>
            <area shape="poly" coords="1523,1109,1607,1169,1648,1119,1564,1058" href="#"
                alt="Block 7 - Plot 16 (1000.36sqm)" title="b7-p16" data-key="b7-p16" onclick="Popup('b7-p16')"/>
            <area shape="poly" coords="1489,1166,1523,1112,1607,1173,1567,1227" href="#"
                alt="Block 7 - Plot 15 (1000.63sqm)" title="b7-p15" data-key="b7-p15" onclick="Popup('b7-p15')"/>
            <area shape="poly" coords="1449,1216,1486,1166,1567,1227,1526,1277" href="#"
                alt="Block 7 - Plot 14 (1000.05sqm)" title="b7-p14" data-key="b7-p14" onclick="Popup('b7-p14')"/>
            <area shape="poly" coords="1412,1269,1442,1218,1526,1282,1489,1329" href="#"
                alt="Block 7 - Plot 13 (1000.03sqm)" title="b7-p13" data-key="b7-p13" data-key="b7-p13" onclick="Popup('b7-p13')"/>
            <area shape="poly" coords="1375,1291,1405,1267,1486,1331,1435,1402" href="#"
                alt="Block 7 - Plot 12 (998.97sqm)" title="b7-p12" data-key="taken" class="taken"/>
            <area shape="poly" coords="1338,1297,1358,1294,1371,1287,1429,1392,1348,1402" href="#"
                alt="Block 7 - Plot 11 (908.55sqm)" title="b7-p11" data-key="taken" class="taken"/>
            <area shape="poly" coords="1274,1306,1338,1299,1348,1400,1287,1407" href="#"
                alt="Block 7 - Plot 10 (960.00sqm)" title="b7-p10" data-key="b7-p10" onclick="Popup('b7-p10')"/>
            <area shape="poly" coords="1213,1316,1277,1299,1284,1407,1227,1414" href="#"
                alt="Block 7 - Plot 9 (935.70sqm)" title="b7-p9" data-key="taken" class="taken"/>
            <area shape="poly" coords="1139,1319,1200,1316,1213,1414,1156,1424" href="#"
                alt="Block 7 - Plot 8 (960.00sqm)" title="b7-p8" data-key="taken" class="taken"/>
            <area shape="poly" coords="1078,1328,1136,1321,1152,1425,1088,1432" href="#"
                alt="Block 7 - Plot 7 (960.00sqm)" title="b7-p7" data-key="taken" class="taken"/>
            <area shape="poly" coords="1014,1338,1031,1442,1088,1429,1078,1331" href="#"
                alt="Block 7 - Plot 6 (960.00sqm)" title="b7-p6" data-key="taken" class="taken"/>
            <area shape="poly" coords="967,1339,943,1444,1028,1441,1011,1339" href="#"
                alt="Block 7 - Plot 5 (1001.85sqm)" title="b7-p5" data-key="b7-p5" onclick="Popup('b7-p5')"/>
            <area shape="poly" coords="923,1324,863,1405,917,1449,943,1439,964,1361,964,1338"
                href="#" alt="Block 7 - Plot 4 (1090.05sqm)" title="b7-p4" data-key="b7-p4" onclick="Popup('b7-p4')"/>
            <area shape="poly" coords="876,1286,903,1306,923,1323,866,1403,812,1366" href="#"
                alt="Block 7 - Plot 3 (963.23sqm)" title="b7-p3" data-key="b7-p3" onclick="Popup('b7-p3')"/>
            <area shape="poly" coords="765,1331,812,1368,873,1287,829,1243" href="#"
                alt="Block 7 - Plot 2 (954.71sqm)" title="b7-p2" data-key="b7-p2" onclick="Popup('b7-p2')"/>
            <area shape="poly" coords="762,1328,812,1365,751,1446,704,1419,704,1398" href="#"
                alt="Block 7 - Plot 1 (949.37sqm)" title="b7-p1" data-key="taken" class="taken"/>

            <!-- end of of block 7 -->
            
            <area shape="poly" coords="1458,990,1525,1038,1533,1048,1529,1060,1502,1097,1421,1037" href="#"
                alt="Block 8 - Plot 1 (945.28sqm)" title="b8-p1" data-key="b8-p1" onclick="Popup('b8-p1')" />
            <area shape="poly" coords="1419,1038,1500,1101,1463,1149,1380,1087" href="#"
                alt="Block 8 - Plot 2 (968.59sqm)" title="b8-p2" data-key="b8-p2" onclick="Popup('b8-p2')" />
            <area shape="poly" coords="1384,1083,1463,1155,1426,1202,1341,1141" href="#"
                alt="Block 8 - Plot 3 (979.71sqm)" title="b8-p3" data-key="b8-p3" onclick="Popup('b8-p3')" />
            <area shape="poly" coords="1343,1137,1425,1205,1388,1254,1308,1186" href="#"
                alt="Block 8 - Plot 4 (982.19sqm)" title="b8-p4" data-key="b8-p4" onclick="Popup('b8-p4')" />
            <area shape="poly" coords="1304,1190,1265,1236,1275,1279,1316,1279,1345,1273,1368,1268,1386,1254" href="#"
                alt="Block 8 - Plot 5 (960.53sqm)" title="b8-p5" data-key="b8-p5" onclick="Popup('b8-p5')" />
            <area shape="poly" coords="1263,1236,1281,1277,1176,1293,1203,1192" href="#"
                alt="Block 8 - Plot 6 (903.06sqm)" title="b8-p6" data-key="b8-p6" onclick="Popup('b8-p6')" />
            <area shape="poly" coords="1182,1174,1203,1192,1180,1289,1137,1297,1122,1299,1112,1285,1112,1258"
                href="#" alt="Block 8 - Plot 7 (933.24sqm)" title="b8-p7" data-key="b8-p7" onclick="Popup('b8-p7')" />
            <area shape="poly" coords="1219,1128,1300,1184,1265,1235,1184,1174" href="#"
                alt="Block 8 - Plot 8 (960.00sqm)" title="b8-p8" data-key="b8-p8" onclick="Popup('b8-p8')" />
            <area shape="poly" coords="1223,1124,1302,1186,1341,1137,1258,1073" href="#"
                alt="Block 8 - Plot 9 (960.00sqm)" title="b8-p9" data-key="b8-p9" onclick="Popup('b8-p9')" />
            <area shape="poly" coords="1296,1027,1382,1083,1345,1137,1258,1071" href="#"
                alt="Block 8 - Plot 10 (960.00sqm)" title="b8-p10" data-key="b8-p10" onclick="Popup('b8-p10')" />
            <area shape="poly" coords="1337,976,1421,1035,1382,1085,1298,1023" href="#"
                alt="Block 8 - Plot 11 (960.00sqm)" title="b8-p11" data-key="b8-p11" onclick="Popup('b8-p11')" />
            <area shape="poly" coords="1456,986,1421,1035,1341,974,1359,947,1370,930,1382,930" href="#"
                alt="Block 8 - Plot 12 (954.63sqm)" title="b8-p12" data-key="b8-p12" onclick="Popup('b8-p12')" />
            
            <area shape="poly" coords="895,1161,978,1225,932,1289,860,1244,848,1223,856,1207" href="#"
                alt="Block 9 - Plot 1 (1274.12sqm)" title="b9-p1"  data-key="b9-p1" onclick="Popup('b9-p1')"/>
            <area shape="poly" coords="899,1161,980,1223,1017,1172,939,1108" href="#"
                alt="Block 9 - Plot 2 (996.21sqm)" title="b9-p2"  data-key="b9-p2" onclick="Popup('b9-p2')"/>
            <area shape="poly" coords="974,1058,1058,1122,1017,1169,937,1106" href="#"
                alt="Block 9 - Plot 3 (996.21sqm)" title="b9-p3"  data-key="b9-p3" onclick="Popup('b9-p3')"/>
            <area shape="poly" coords="1015,1005,1099,1070,1060,1120,976,1056" href="#"
                alt="Block 9 - Plot 4 (996.21sqm)" title="b9-p4"  data-key="b9-p4" onclick="Popup('b9-p4')"/>
            <area shape="poly" coords="1058,955,1017,1004,1099,1070,1139,1015" href="#"
                alt="Block 9 - Plot 5 (996.21sqm)" title="b9-p5"  data-key="b9-p5" onclick="Popup('b9-p5')"/>
            <area shape="poly" coords="1095,901,1176,963,1137,1013,1054,951" href="#"
                alt="Block 9 - Plot 6 (996.21sqm)" title="b9-p6"  data-key="b9-p6" onclick="Popup('b9-p6')"/>
            <area shape="poly" coords="1135,844,1217,908,1178,959,1100,899" href="#"
                alt="Block 9 - Plot 7 (996.21sqm)" title="b9-p7"  data-key="b9-p7" onclick="Popup('b9-p7')"/>
            <area shape="poly" coords="1139,844,1221,907,1267,846,1205,794,1192,788,1178,788" href="#"
                alt="Block 9 - Plot 8 (996.21sqm)" title="b9-p8"  data-key="b9-p8" onclick="Popup('b9-p8')"/>
            <area shape="poly" coords="1221,910,1271,844,1339,895,1347,905,1343,920,1300,971" href="#"
                alt="Block 9 - Plot 9 (1279.79sqm)" title="b9-p9"  data-key="b9-p9" onclick="Popup('b9-p9')"/>
            <area shape="poly" coords="1219,910,1298,974,1262,1027,1182,963" href="#"
                alt="Block 9 - Plot 10 (1003.79sqm)" title="b9-p10"  data-key="b9-p10" onclick="Popup('b9-p10')"/>
            <area shape="poly" coords="1180,969,1260,1025,1219,1077,1137,1013" href="#"
                alt="Block 9 - Plot 11 (1003.79sqm)" title="b9-p11"  data-key="b9-p11" onclick="Popup('b9-p11')"/>
            <area shape="poly" coords="1139,1013,1221,1081,1184,1128,1099,1066" href="#"
                alt="Block 9 - Plot 12 (1003.79sqm)" title="b9-p12"  data-key="b9-p12" onclick="Popup('b9-p12')"/>
            <area shape="poly" coords="1178,1132,1145,1182,1060,1120,1099,1071" href="#"
                alt="Block 9 - Plot 13 (1003.79sqm)" title="b9-p13"  data-key="b9-p13" onclick="Popup('b9-p13')"/>
            <area shape="poly" coords="1058,1124,1139,1186,1102,1236,1017,1172" href="#"
                alt="Block 9 - Plot 14 (1003.79sqm)" title="b9-p14"  data-key="b9-p14" onclick="Popup('b9-p14')"/>
            <area shape="poly" coords="1019,1172,1097,1236,1089,1252,1085,1269,1087,1283,1081,1299,980,1221"
                href="#" alt="Block 9 - Plot 15 (1088.49sqm)" title="b9-p15"  data-key="taken" class="taken" onclick="Popup('taken')"/>
            <area shape="poly" coords="980,1225,1075,1302,1040,1308,1003,1316,980,1314,959,1310,928,1289,930,1289"
                href="#" alt="Block 9 - Plot 16 (1078.16sqm)" title="b9-p16"  data-key="b9-p16" onclick="Popup('b9-p16')"/>


            {{-- <area shape="poly"  href="#"
                alt="Block 5 - Plot 9 (1000.00sqm)" title="b5-p9" />
            <area shape="poly" coords="229, 563, 257, 527, 282, 545, 250, 584, 232, 571, 229, 567" href="#"
                alt="Block 5 - Plot 8 (1048.26sqm)" title="b5-p8" />
            <area shape="poly" coords="251, 584, 274, 602, 306, 563, 281, 545" href="#"
                alt="Block 5 - Plot 7 (1049.98sqm)" title="b5-p7" />
            <area shape="poly" coords="275, 604, 305, 565, 329, 583, 305, 615, 302, 619, 297, 619" href="#"
                alt="Block 5 - Plot 6 (1135.44sqm)" title="b5-p6" />
            <area shape="poly" coords="295, 554, 312, 532, 347, 558, 331, 582" href="#"
                alt="Block 5 - Plot 5 (1000.00sqm)" title="b5-p5" />
            <area shape="poly" coords="312, 529, 349, 559, 367, 536, 330, 510" href="#"
                alt="Block 5 - Plot 4 (1000.00sqm)" title="b5-p4" /> --}}
            {{-- <area shape="poly" coords="232, 446, 248, 426, 292, 459, 278, 479" href="#"
                alt="Block 4 - Plot 3 (1085.12sqm)" title="b4-p3" />
            <area shape="poly" coords="215, 468, 232, 447, 276, 480, 260, 500" href="#"
                alt="Block 4 - Plot 4 (1085.12sqm)" title="b4-p4" />
            <area shape="poly" coords="199, 489, 216, 470, 258, 501, 243, 521" href="#"
                alt="Block 4 - Plot 5 (1085.12sqm)" title="b4-p5" />
            <area shape="poly" coords="223, 506, 243, 521, 221, 552, 218, 555, 215, 555, 195, 540" href="#"
                alt="Block 4 - Plot 6 (994.71sqm)" title="b4-p6" />
            <area shape="poly" coords="199, 488, 221, 505, 194, 540, 173, 524" href="#"
                alt="Block 4 - Plot 7 (960.01sqm)" title="b4-p7" />
            <area shape="poly" coords="176, 471, 198, 488, 171, 524, 149, 504" href="#"
                alt="Block 4 - Plot 8 (959.33sqm)" title="b4-p8" />
            <area shape="poly" coords="154, 453, 131, 483, 130, 488, 132, 491, 134, 495, 148, 506, 176, 469" href="#"
                alt="Block 4 - Plot 9 (982.74sqm)" title="b4-p9" />
            <area shape="poly" coords="155, 452, 169, 433, 215, 468, 199, 487" href="#"
                alt="Block 4 - Plot 10 (1090.14sqm)" title="b4-p10" />
            <area shape="poly" coords="170, 432, 174, 427, 180, 419, 187, 416, 188, 412, 232, 447, 214, 466" href="#"
                alt="Block 4 - Plot 11 (1083.39sqm)" title="b4-p11" />
            <area shape="poly"
                coords="189, 412, 198, 409, 209, 408, 223, 406, 233, 404, 243, 402, 253, 398, 260, 404, 229, 445"
                href="#" alt="Block 4 - Plot 12 (1273.36sqm)" title="b4-p12" />
            <area shape="poly" coords="262, 406, 248, 425, 292, 459, 309, 440" href="#"
                alt="Block 4 - Plot 2 (1081.25sqm)" title="b4-p2" />
            <area shape="poly" coords="308, 438, 284, 420, 311, 384, 331, 399, 333, 401, 333, 404" href="#"
                alt="Block 4 - Plot 1 (1108.78sqm)" title="b4-p1" />
            <area shape="poly"
                coords="256, 397, 260, 394, 265, 391, 269, 387, 286, 370, 288, 367, 291, 368, 310, 382, 282, 419"
                href="#" alt="Block 4 - Plot 13 (1034.28sqm)" title="b4-p13" /> --}}
            {{-- <area shape="poly" coords="277, 503, 294, 481, 329, 509, 311, 530" href="#"
                alt="Block 5 - Plot 10 (1000.00sqm)" title="b5-p10" />
            <area shape="poly" coords="294, 480, 310, 458, 347, 485, 329, 508" href="#"
                alt="Block 5 - Plot 11 (1000.00sqm)" title="b5-p11" />
            <area shape="poly" coords="328, 435, 363, 460, 348, 483, 311, 456" href="#"
                alt="Block 5 - Plot 12 (1000.00sqm)" title="b5-p12" />
            <area shape="poly" coords="329, 433, 344, 413, 346, 412, 381, 438, 364, 458" href="#"
                alt="Block 5 - Plot 13 (994.63qm)" title="b5-p13" />
            <area shape="poly" coords="348, 486, 330, 509, 368, 536, 387, 513" href="#"
                alt="Block 5 - Plot 3 (1000.00sqm)" title="b5-p3" />
            <area shape="poly" coords="367, 460, 384, 440, 415, 462, 417, 465, 417, 468, 403, 490" href="#"
                alt="Block 5 - Plot 1 (994.63sqm)" title="b5-p1" />
            <area shape="poly" coords="349, 485, 386, 513, 403, 489, 365, 460" href="#"
                alt="Block 5 - Plot 2 (1000.00sqm)" title="b5-p2" /> --}}
            {{-- <area shape="poly" coords="383, 421, 411, 385, 432, 402, 404, 437" href="#"
                alt="Block 2 - Plot 2 (1000.00sqm)" title="b2-p2" />
            <area shape="poly" coords="405, 438, 433, 403, 457, 420, 432, 451, 429, 453, 425, 454" href="#"
                alt="Block 2 - Plot 1 (994.63sqm)" title="b2-p1" />
            <area shape="poly" coords="435, 402, 462, 366, 482, 380, 483, 383, 457, 418" href="#"
                alt="Block 2 - Plot 11 (994.63sqm)" title="b2-p11" />
            <area shape="poly" coords="410, 386, 439, 348, 461, 366, 433, 403" href="#"
                alt="Block 2 - Plot 10 (1000.00sqm)" title="b2-p10" />
            <area shape="poly" coords="386, 365, 415, 330, 438, 347, 410, 383" href="#"
                alt="Block 2 - Plot 9 (1000.00sqm)" title="b2-p9" />
            <area shape="poly" coords="386, 367, 409, 384, 381, 419, 358, 402" href="#"
                alt="Block 2 - Plot 3 (1000.00sqm)" title="b2-p3" />
            <area shape="poly" coords="363, 348, 391, 312, 414, 330, 386, 365" href="#"
                alt="Block 2 - Plot 8 (1000.00sqm)" title="b2-p8" />
            <area shape="poly" coords="333, 385, 363, 349, 386, 366, 358, 402" href="#"
                alt="Block 2 - Plot 4 (1000.00sqm)" title="b2-p4" />
            <area shape="poly" coords="316, 336, 302, 351, 300, 353, 300, 358, 334, 384, 351, 363" href="#"
                alt="Block 2 - Plot 5 (1022.97sqm)" title="b2-p5" />
            <area shape="poly" coords="370, 337, 337, 310, 316, 334, 353, 362" href="#"
                alt="Block 2 - Plot 6 (1024.94sqm)" title="b2-p6" />
            <area shape="poly" coords="371, 337, 338, 309, 354, 291, 356, 288, 360, 288, 391, 311" href="#"
                alt="Block 2 - Plot 7 (1013.87sqm)" title="b2-p7" />
            <area shape="poly"
                coords="536, 533, 528, 527, 502, 563, 499, 565, 498, 569, 498, 572, 498, 576, 500, 580, 503, 581, 507, 581, 512, 579, 517, 579, 521, 578, 527, 578"
                href="#" alt="Block 8 - Plot 7 (933.24sqm)" title="b8-p7" /> --}}
            {{-- <area shape="poly" coords="539, 534, 528, 579, 571, 574, 567, 555" href="#"
                alt="Block 8 - Plot 6 (903.06sqm)" title="b8-p6" />
            <area shape="poly" coords="568, 554, 573, 573, 601, 571, 617, 565, 618, 561, 585, 535" href="#"
                alt="Block 8 - Plot 5 (960.53sqm)" title="b8-p5" />
            <area shape="poly" coords="548, 504, 530, 526, 567, 554, 584, 533" href="#"
                alt="Block 8 - Plot 8 (960.00sqm)" title="b8-p8" />
            <area shape="poly" coords="581, 458, 598, 438, 634, 466, 617, 487" href="#"
                alt="Block 8 - Plot 11 (960.00sqm)" title="b8-p11" />
            <area shape="poly" coords="582, 458, 565, 481, 602, 509, 618, 487" href="#"
                alt="Block 8 - Plot 10 (960.00sqm)" title="b8-p10" />
            <area shape="poly" coords="548, 503, 564, 482, 600, 510, 584, 530" href="#"
                alt="Block 8 - Plot 9 (960.00sqm)" title="b8-p9" />
            <area shape="poly" coords="585, 531, 601, 510, 639, 539, 630, 548, 622, 558, 621, 560" href="#"
                alt="Block 8 - Plot 4 (982.19sqm)" title="b8-p4" />
            <area shape="poly" coords="602, 509, 619, 489, 656, 516, 639, 538" href="#"
                alt="Block 8 - Plot 3 (979.71sqm)" title="b8-p3" />
            <area shape="poly" coords="619, 487, 637, 465, 672, 492, 656, 515" href="#"
                alt="Block 8 - Plot 2 (968.59sqm)" title="b8-p2" />
            <area shape="poly" coords="637, 463, 652, 443, 684, 468, 685, 471, 684, 475, 672, 490" href="#"
                alt="Block 8 - Plot 1 (945.28sqm)" title="b8-p1" />
            <area shape="poly" coords="651, 443, 634, 464, 599, 437, 612, 419, 615, 417, 617, 417" href="#"
                alt="Block 8 - Plot 12 (954.63sqm)" title="b8-p12" /> --}}
            <!-- <area shape="poly" coords="640, 369, 665, 387, 643, 417, 616, 397" href="#"
                alt="Block 10 - Plot 6 (1002.25sqm)" title="b10-p6" />
            <area shape="poly" coords="666, 388, 692, 407, 670, 439, 643, 418" href="#"
                alt="Block 10 - Plot 5 (1007.14sqm)" title="b10-p5" />
            <area shape="poly" coords="671, 440, 695, 407, 720, 428, 700, 455, 696, 457, 692, 457" href="#"
                alt="Block 10 - Plot 4 (998.98sqm)" title="b10-p4" />
            <area shape="poly" coords="696, 407, 721, 427, 741, 401, 741, 397, 739, 393, 734, 389, 719, 377" href="#"
                alt="Block 10 - Plot 3 (981.69sqm)" title="b10-p3" />
            <area shape="poly" coords="691, 355, 719, 376, 694, 406, 666, 385" href="#"
                alt="Block 10 - Plot 2 (1007.14sqm)" title="b10-p2" />
                
                973, 490, 1012, 518, 976, 566, 937, 535, 955, 513
                1012, 520, 978, 565, 937, 534, 972, 489
            <area shape="poly" coords="664, 336, 691, 355, 667, 386, 641, 366" href="#"
                alt="Block 10 - Plot 1 (1002.96sqm)" title="b10-p1" /> -->

            <!-- https://www.image-map.net/ -->
            {{-- <area target="" alt="Block 10 - Plot 1" title="b10-p1" href="#"
                    coords="1483,749,1543,796,1489,864,1428,819" shape="poly">
                    <!-- from https://imagemap.org/: 1482,750 1542,796 1486,866 1431,820 1482,745 1482,745 -->
            <area shape="poly" coords="1543,792,1603,841,1551,912,1492,864" href="#"
                alt="Block 10 - Plot 2 (1007.14sqm)" title="b10-p2" />

            <area shape="poly" coords="823,1506,915,1577,980,1491" href="#" alt="Block 6 - Plot 17 (971.89sqm)"
                title="b6-p17" />
             --}}
            <!-- end of https://www.image-map.net/ -->
            


            {{-- <area shape="poly" coords="372, 677, 440, 668, 410, 706" href="#" alt="Block 6 - Plot 17 (971.89sqm)"
                title="b6-p17" />
            <area shape="poly" coords="480, 701, 502, 717, 479, 747, 475, 748, 469, 748, 451, 736" href="#"
                alt="Block 6 - Plot 14 (1043.30sqm)" title="b6-p14" />
            <area shape="poly" coords="459, 684, 480, 700, 451, 737, 428, 721" href="#"
                alt="Block 6 - Plot 15 (1060.69sqm)" title="b6-p15" />
            <area shape="poly" coords="441, 668, 469, 666, 428, 719, 411, 706" href="#"
                alt="Block 6 - Plot 16 (1015.42sqm)" title="b6-p16" />
            <area shape="poly" coords="469, 665, 476, 664, 517, 698, 504, 716, 459, 681" href="#"
                alt="Block 6 - Plot 13 (1018.63sqm)" title="b6-p13" />
            <area shape="poly" coords="477, 663, 549, 655, 519, 696" href="#" alt="Block 6 - Plot 12 (1060.13sqm)"
                title="b6-p12" />
            <area shape="poly" coords="555, 654, 629, 645, 586, 703, 549, 676, 553, 671, 562, 678, 571, 666" href="#"
                alt="Block 6 - Plot 11 (1729.45sqm)" title="b6-p11" />
            <area shape="poly" coords="533, 698, 551, 676, 585, 702, 568, 726" href="#"
                alt="Block 6 - Plot 10 (1003.61sqm)" title="b6-p10" />
            <area shape="poly" coords="515, 722, 532, 700, 534, 702, 567, 727, 550, 750" href="#"
                alt="Block 6 - Plot 9 (1001.61sqm)" title="b6-p9" />
            <area shape="poly" coords="496, 748, 514, 723, 549, 750, 532, 774" href="#"
                alt="Block 6 - Plot 8 (1001.61sqm)" title="b6-p8" />
            <area shape="poly" coords="506, 809, 532, 773, 495, 746, 487, 758" href="#"
                alt="Block 6 - Plot 7 (1015.82sqm)" title="b6-p7" />
            <area shape="poly" coords="485, 836, 479, 829, 474, 764, 480, 764, 482, 763, 484, 762, 486, 758, 504, 809"
                href="#" alt="Block 6 - Plot 6 (1149.73sqm)" title="b6-p6" />
            <area shape="poly" coords="439, 803, 475, 828, 472, 765, 468, 765, 463, 764, 460, 761" href="#"
                alt="Block 6 - Plot 5 (1053.20sqm)" title="b6-p5" />
            <area shape="poly" coords="412, 781, 439, 743, 460, 760, 439, 801" href="#"
                alt="Block 6 - Plot 4 (1046.54sqm)" title="b6-p4" />
            <area shape="poly" coords="390, 762, 416, 726, 438, 743, 411, 780" href="#"
                alt="Block 6 - Plot 3 (991.03sqm)" title="b6-p3" />
            <area shape="poly" coords=" 872,1583,924,1620,863,1700,813,1657" href="#"
                alt="Block 6 - Plot 2 (986.63sqm)" title="b6-p2" />
            <area shape="poly" coords="366, 743, 392, 709, 371, 692, 345, 725" href="#"
                alt="Block 6 - Plot 1 (962.86sqm)" title="b6-p1" /> --}}
            {{-- <area shape="poly" coords="481, 583, 454, 587, 445, 588, 438, 588, 429, 586, 424, 583, 418, 578, 438, 550"
                href="#" alt="Block 9 - Plot 16 (1078.16sqm)" title="b9-p16" />
            <area shape="poly" coords="440, 549, 457, 528, 494, 554, 488, 562, 486, 568, 486, 574, 486, 580, 484, 583"
                href="#" alt="Block 9 - Plot 15 (1088.49sqm)" title="b9-p15" />
            <area shape="poly" coords="436, 548, 416, 577, 383, 552, 381, 550, 381, 546, 400, 521" href="#"
                alt="Block 9 - Plot 1 (1274.12sqm)" title="b9-p1" />
            <area shape="poly" coords="511, 454, 527, 434, 562, 459, 546, 481" href="#"
                alt="Block 9 - Plot 11 (1003.79sqm)" title="b9-p11" />
            <area shape="poly" coords="475, 503, 491, 479, 528, 508, 511, 529" href="#"
                alt="Block 9 - Plot 13 (1003.79sqm)" title="b9-p13" />
            <area shape="poly" coords="456, 524, 473, 504, 510, 531, 493, 552" href="#"
                alt="Block 9 - Plot 14 (1003.79sqm)" title="b9-p14" />
            <area shape="poly" coords="401, 519, 418, 497, 456, 526, 438, 547" href="#"
                alt="Block 9 - Plot 2 (996.21sqm)" title="b9-p2" />
            <area shape="poly" coords="420, 497, 437, 474, 473, 501, 454, 525" href="#"
                alt="Block 9 - Plot 3 (996.21sqm)" title="b9-p3" />
            <area shape="poly" coords="439, 474, 455, 452, 491, 476, 474, 499" href="#"
                alt="Block 9 - Plot 4 (996.21sqm)" title="b9-p4" />
            <area shape="poly" coords="494, 477, 510, 456, 547, 484, 529, 505" href="#"
                alt="Block 9 - Plot 12 (1003.79sqm)" title="b9-p12" />
            <area shape="poly" coords="456, 450, 475, 427, 510, 452, 493, 476" href="#"
                alt="Block 9 - Plot 5 (996.21sqm)" title="b9-p5" />
            <area shape="poly" coords="475, 426, 490, 404, 526, 432, 510, 453" href="#"
                alt="Block 9 - Plot 6 (996.21sqm)" title="b9-p6" />
            <area shape="poly" coords="493, 402, 510, 381, 546, 408, 529, 432" href="#"
                alt="Block 9 - Plot 7 (996.21sqm)" title="b9-p7" />
            <area shape="poly" coords="564, 458, 582, 435, 547, 408, 529, 431" href="#"
                alt="Block 9 - Plot 10 (1003.79sqm)" title="b9-p10" />
            <area shape="poly" coords="547, 406, 567, 379, 599, 403, 602, 405, 601, 409, 582, 434" href="#"
                alt="Block 9 - Plot 9 (1279.79sqm)" title="b9-p9" />
            <area shape="poly" coords="546, 406, 567, 377, 537, 354, 534, 353, 531, 353, 510, 380" href="#"
                alt="Block 9 - Plot 8 (996.21sqm)" title="b9-p8" /> --}}
            <!-- <area shape="poly" coords="652, 274, 688, 303, 673, 323, 635, 295" href="#"
                alt="Block 7 - Plot 23 (1021.15sqm)" title="b7-p23" />
            <area shape="poly" coords="690, 305, 732, 338, 717, 358, 675, 324" href="#"
                alt="Block 7 - Plot 22 (1079.69sqm)" title="b7-p22" />
            <area shape="poly" coords="732, 338, 793, 383, 752, 389, 750, 384, 717, 359" href="#"
                alt="Block 7 - Plot 21 (1228.31sqm)" title="b7-p21" />
            <area shape="poly" coords="753, 390, 792, 385, 814, 401, 797, 423, 753, 410" href="#"
                alt="Block 7 - Plot 20 (1183.18sqm)" title="b7-p20" />
            <area shape="poly" coords="739, 426, 751, 410, 796, 424, 774, 452" href="#"
                alt="Block 7 - Plot 19 (1001.02sqm)" title="b7-p19" />
            <area shape="poly" coords="720, 449, 738, 427, 773, 454, 756, 474" href="#"
                alt="Block 7 - Plot 18 (1019.96sqm)" title="b7-p18" />
            <area shape="poly" coords="703, 473, 720, 451, 756, 478, 737, 500" href="#"
                alt="Block 7 - Plot 17 (1000.00sqm)" title="b7-p17" />
            <area shape="poly" coords="685, 497, 702, 474, 737, 502, 721, 524" href="#"
                alt="Block 7 - Plot 16 (1000.36sqm)" title="b7-p16" />
            <area shape="poly" coords="664, 521, 682, 498, 718, 526, 701, 548" href="#"
                alt="Block 7 - Plot 15 (1000.63sqm)" title="b7-p15" />
            <area shape="poly" coords="648, 544, 665, 522, 703, 550, 684, 571" href="#"
                alt="Block 7 - Plot 14 (1000.05sqm)" title="b7-p14" />
            <area shape="poly" coords="633, 568, 648, 546, 683, 572, 666, 596" href="#"
                alt="Block 7 - Plot 13 (1000.03sqm)" title="b7-p13" />
            <area shape="poly" coords="631, 570, 629, 573, 623, 575, 617, 580, 643, 626, 648, 624, 666, 598" href="#"
                alt="Block 7 - Plot 12 (998.97sqm)" title="b7-p12" />
            <area shape="poly" coords="600, 584, 616, 581, 641, 625, 607, 628" href="#"
                alt="Block 7 - Plot 11 (908.55sqm)" title="b7-p11" />
            <area shape="poly" coords="573, 587, 599, 584, 605, 627, 578, 629" href="#"
                alt="Block 7 - Plot 10 (960.00sqm)" title="b7-p10" />
            <area shape="poly" coords="546, 590, 571, 587, 576, 631, 551, 634" href="#"
                alt="Block 7 - Plot 9 (935.70sqm)" title="b7-p9" />
            <area shape="poly" coords="509, 594, 538, 591, 543, 635, 518, 638" href="#"
                alt="Block 7 - Plot 8 (960.00sqm)" title="b7-p8" />
            <area shape="poly" coords="486, 597, 510, 595, 517, 637, 489, 641" href="#"
                alt="Block 7 - Plot 7 (960.00sqm)" title="b7-p7" />
            <area shape="poly" coords="457, 601, 483, 597, 488, 640, 460, 642" href="#"
                alt="Block 7 - Plot 6 (960.00sqm)" title="b7-p6" />
            <area shape="poly" coords="435, 601, 454, 600, 459, 643, 424, 649" href="#"
                alt="Block 7 - Plot 5 (1001.85sqm)" title="b7-p5" />
            <area shape="poly" coords="416, 595, 422, 600, 424, 601, 430, 602, 433, 602, 421, 650, 414, 650, 389, 631"
                href="#" alt="Block 7 - Plot 4 (1090.05sqm)" title="b7-p4" />
            <area shape="poly" coords="392, 577, 414, 594, 387, 630, 365, 613" href="#"
                alt="Block 7 - Plot 3 (963.23sqm)" title="b7-p3" />
            <area shape="poly" coords="346, 595, 368, 564, 372, 563, 374, 563, 392, 576, 365, 611" href="#"
                alt="Block 7 - Plot 2 (954.71sqm)" title="b7-p2" />
                
            <area shape="poly" coords="337, 649, 319, 637, 318, 634, 318, 628, 344, 595, 365, 613" href="#"
                alt="Block 7 - Plot 1 (949.37sqm)" title="b7-p1" /> -->
            {{-- <area shape="poly" coords="292, 685, 352, 677, 355, 680, 355, 683, 332, 715" href="#"
                alt="Block 3 - Plot 1 (968.14sqm)" title="b3-p1" />
            <area shape="poly" coords="222, 630, 247, 597, 272, 617, 248, 648, 232, 639" href="#"
                alt="Block 3 - Plot 2 (1025.55sqm)" title="b3-p2" />
            <area shape="poly" coords="221, 577, 246, 597, 220, 630, 194, 611" href="#"
                alt="Block 31 - Plot 3 (1041.38sqm)" title="b3-p3" />
            <area shape="poly" coords="197, 559, 221, 577, 194, 611, 166, 592" href="#"
                alt="Block 3 - Plot 4 (1043.21sqm)" title="b3-p4" />
            <area shape="poly" coords="169, 537, 195, 557, 166, 591, 142, 572" href="#"
                alt="Block 3 - Plot 5 (1033.62sqm)" title="b3-p5" />
            <area shape="poly" coords="167, 536, 139, 515, 115, 549, 142, 570" href="#"
                alt="Block 3 - Plot 6 (1089.93sqm)" title="b3-p6" />
            <area shape="poly" coords="127, 507, 137, 516, 114, 548, 102, 538, 72, 525, 121, 503" href="#"
                alt="Block 3 - Plot 7 (1066.44sqm)" title="b3-p7" />
            <area shape="poly" coords="47, 498, 62, 479, 116, 488, 120, 500, 72, 523" href="#"
                alt="Block 3 - Plot 8 (1515.34sqm)" title="b3-p8" />
            <area shape="poly" coords="63, 477, 91, 441, 125, 467, 118, 475, 117, 480, 116, 486" href="#"
                alt="Block 3 - Plot 9 (1230.25sqm)" title="b3-p9" />
            <area shape="poly" coords="91, 439, 108, 418, 144, 444, 127, 466" href="#"
                alt="Block 3 - Plot 10 (1000.00sqm)" title="b3-p10" />
            <area shape="poly" coords="107, 417, 126, 392, 161, 421, 143, 444" href="#"
                alt="Block 3 - Plot 11 (1103.32sqm)" title="b3-p11" />
            <area shape="poly" coords="126, 392, 147, 365, 177, 402, 162, 419" href="#"
                alt="Block 3 - Plot 12 (1035.61sqm)" title="b3-p12" />
            <area shape="poly" coords="149, 363, 152, 358, 186, 353, 194, 397, 179, 402" href="#"
                alt="Block 3 - Plot 13 (1024.80sqm)" title="b3-p13" />
            <area shape="poly" coords="188, 352, 216, 346, 224, 391, 195, 397" href="#"
                alt="Block 3 - Plot 14 (1000.01sqm)" title="b3-p14" />
            <area shape="poly"
                coords="217, 347, 233, 345, 235, 339, 269, 368, 265, 373, 260, 378, 253, 384, 242, 389, 225, 392"
                href="#" alt="Block 3 - Plot 15 (1249.88sqm)" title="b3-p15" />
            <area shape="poly" coords="236, 339, 254, 317, 287, 346, 269, 367" href="#"
                alt="Block 3 - Plot 16 (1000.00sqm)" title="b3-p16" />
            <area shape="poly" coords="255, 317, 273, 294, 306, 323, 288, 345" href="#"
                alt="Block 3 - Plot 17 (1000.00sqm)" title="b3-p17" />
            <area shape="poly" coords="275, 293, 292, 273, 325, 302, 308, 323" href="#"
                alt="Block 3 - Plot 18 (1000.00sqm)" title="b3-p18" />
            <area shape="poly" coords="295, 270, 311, 251, 342, 274, 345, 277, 343, 280, 327, 299" href="#"
                alt="Block 3 - Plot 19(1035.61)" title="b3-p19" /> --}}
            {{-- <area shape="poly" coords="495, 318, 518, 336, 495, 366, 491, 368, 485, 366, 469, 353" href="#"
                alt="Block 1 - Plot 1 (995.85sqm)" title="b1-p1" />
            <area shape="poly" coords="470, 301, 494, 319, 468, 353, 445, 335" href="#"
                alt="Block 1 - Plot 2 (995.85sqm)" title="b1-p2" />
            <area shape="poly" coords="448, 284, 472, 301, 445, 335, 421, 319" href="#"
                alt="Block 1 - Plot 3 (995.85sqm)" title="b1-p3" />
            <area shape="poly" coords="396, 299, 422, 264, 446, 283, 419, 317" href="#"
                alt="Block 1 - Plot 4 (995.85sqm)" title="b1-p4" />
            <area shape="poly" coords="399, 248, 422, 264, 396, 299, 371, 280" href="#"
                alt="Block 1 - Plot 5 (995.85sqm)" title="b1-p5" />
            <area shape="poly" coords="373, 228, 398, 245, 371, 280, 348, 262" href="#"
                alt="Block 1 - Plot 6 (995.85sqm)" title="b1-p6" />
            <area shape="poly" coords="328, 231, 349, 208, 374, 227, 347, 262, 330, 248, 329, 245, 331, 240, 331, 235"
                href="#" alt="Block 1 - Plot 7 (1106.80sqm)" title="b1-p7" /> --}}
        </map>

    </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <!-- <script src="imageMapResizer.min.js"></script>  -->
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/image-map-resizer/1.0.10/js/imageMapResizer.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/imagemapster@1.5.4/dist/jquery.imagemapster.js"></script>

    <script>
        $(document).ready(function (e) {
            // $("map").imageMapResize();
            
            $('#map-image').mapster({
                fillColor: '00a61e',
                stroke: true,
                singleSelect: false,
                fillOpacity: 0.5,
                fade: true,
                strokeColor: 'ff0000',
                strokeWidth: 1,
                fadeDuration: 300,

                mapKey: 'data-key',
                areas: [{
                    key: 'taken',
                    stroke: false,
                    isDeselectable:false,
                    render_highlight: {
                        fillOpacity: 0 ,
                        fillColor: 'e02025',
                    }
                }],
            });


            $('.taken').mapster('set',  true, { fillColor: 'e02025' });
        });


        

        function Popup(text) {
            console.log(text);
            alert(text);
        }
    </script>

</body>

</html>
