<html>
<head>
  <style>
.table {
  box-shadow: 0px 2px 2px rgba(0,0,0,0.2);
  -moz-box-shadow: 0px 2px 2px rgba(0,0,0,0.2);
  -webkit-box-shadow: 0px 2px 2px rgba(0,0,0,0.2);
  border-collapse: collapse;
  line-height: 1.5;
  text-align: left;
  width: 100%;
}
.table th {
  background-color: #1B73BA;
  box-sizing: border-box;
  color: #FFFFFF;
  font-size: 14px;
  font-weight: normal;
  padding: 10px;
  text-align: center;
  vertical-align : middle;
}
.table thead {
  box-shadow: 0px 2px 2px rgba(0,0,0,0.2);
  -moz-box-shadow: 0px 2px 2px rgba(0,0,0,0.2);
  -webkit-box-shadow: 0px 2px 2px rgba(0,0,0,0.2);
}

/* th偶数番号の設定 */
.table thead th:nth-child(odd) {
  background-color: #17619C;
  border-right: 1px solid #17619C;
}
.table td {
  background-color: #F8F8F8;
  border-right: 1px solid #8DA6AF;
  border-top: 1px solid #8DA6AF;
  font-size: 14px;
  padding: 10px;
  vertical-align: top;
}
.table td:last-child {
  border-right: none;
}
.table tbody tr:first-child td {
  border-top: none;
}

/* tr奇数番号のth設定 */
.table tr:nth-child(even) th {
  background-color: #17619C;
  border-bottom: 1px solid #17619C;
  box-shadow: 2px 0 2px rgba(0,0,0,0.2);
  -moz-box-shadow: 2px 0 2px rgba(0,0,0,0.2);
  -webkit-box-shadow: 2px 0 2px rgba(0,0,0,0.2);
}
</style>
</head>
<body>
  <div class = "table">
    @yield('table')
  </div>
</html>
