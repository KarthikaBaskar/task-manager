{"filter":false,"title":"index.php","tooltip":"/api/index.php","undoManager":{"mark":85,"position":85,"stack":[[{"group":"doc","deltas":[{"start":{"row":63,"column":0},"end":{"row":64,"column":6},"action":"remove","lines":["//....","//...."]},{"start":{"row":63,"column":0},"end":{"row":73,"column":1},"action":"insert","lines":["$sql = \"SELECT user_id,username,name,profile_pic FROM users ORDER BY user_id DESC\";","try {","$db = getDB();","$stmt = $db->query($sql); ","$users = $stmt->fetchAll(PDO::FETCH_OBJ);","$db = null;","echo '{\"users\": ' . json_encode($users) . '}';","} catch(PDOException $e) {","error_log($e->getMessage(), 3, '/var/tmp/phperror.log'); //Write error log","echo '{\"error\":{\"text\":'. $e->getMessage() .'}}';","}"]}]}],[{"group":"doc","deltas":[{"start":{"row":63,"column":8},"end":{"row":63,"column":81},"action":"remove","lines":["SELECT user_id,username,name,profile_pic FROM users ORDER BY user_id DESC"]},{"start":{"row":63,"column":8},"end":{"row":63,"column":157},"action":"insert","lines":["INSERT INTO `database`.`users` (`user_id`, `username`, `password`, `name`, `profile_pic`) VALUES ('1', 'Karthika', '12345', 'Karthika baskar', NULL);"]}]}],[{"group":"doc","deltas":[{"start":{"row":63,"column":0},"end":{"row":63,"column":1},"action":"insert","lines":["/"]}]}],[{"group":"doc","deltas":[{"start":{"row":63,"column":1},"end":{"row":63,"column":2},"action":"insert","lines":["*"]}]}],[{"group":"doc","deltas":[{"start":{"row":72,"column":49},"end":{"row":73,"column":0},"action":"insert","lines":["",""]}]}],[{"group":"doc","deltas":[{"start":{"row":73,"column":0},"end":{"row":73,"column":1},"action":"insert","lines":["*"]}]}],[{"group":"doc","deltas":[{"start":{"row":73,"column":1},"end":{"row":73,"column":2},"action":"insert","lines":["/"]}]}],[{"group":"doc","deltas":[{"start":{"row":73,"column":1},"end":{"row":73,"column":2},"action":"remove","lines":["/"]}]}],[{"group":"doc","deltas":[{"start":{"row":73,"column":0},"end":{"row":73,"column":1},"action":"remove","lines":["*"]}]}],[{"group":"doc","deltas":[{"start":{"row":72,"column":49},"end":{"row":73,"column":0},"action":"remove","lines":["",""]}]}],[{"group":"doc","deltas":[{"start":{"row":73,"column":1},"end":{"row":74,"column":0},"action":"insert","lines":["",""]}]}],[{"group":"doc","deltas":[{"start":{"row":74,"column":0},"end":{"row":74,"column":1},"action":"insert","lines":["*"]}]}],[{"group":"doc","deltas":[{"start":{"row":74,"column":1},"end":{"row":74,"column":2},"action":"insert","lines":["/"]}]}],[{"group":"doc","deltas":[{"start":{"row":63,"column":109},"end":{"row":63,"column":110},"action":"remove","lines":["1"]}]}],[{"group":"doc","deltas":[{"start":{"row":63,"column":109},"end":{"row":63,"column":110},"action":"remove","lines":["'"]}]}],[{"group":"doc","deltas":[{"start":{"row":63,"column":109},"end":{"row":63,"column":111},"action":"insert","lines":["''"]}]}],[{"group":"doc","deltas":[{"start":{"row":63,"column":109},"end":{"row":63,"column":111},"action":"remove","lines":["''"]}]}],[{"group":"doc","deltas":[{"start":{"row":63,"column":108},"end":{"row":63,"column":109},"action":"remove","lines":["'"]}]}],[{"group":"doc","deltas":[{"start":{"row":63,"column":108},"end":{"row":63,"column":110},"action":"insert","lines":["''"]}]}],[{"group":"doc","deltas":[{"start":{"row":63,"column":109},"end":{"row":63,"column":110},"action":"insert","lines":["2"]}]}],[{"group":"doc","deltas":[{"start":{"row":63,"column":1},"end":{"row":63,"column":2},"action":"remove","lines":["*"]}]}],[{"group":"doc","deltas":[{"start":{"row":63,"column":0},"end":{"row":63,"column":1},"action":"remove","lines":["/"]}]}],[{"group":"doc","deltas":[{"start":{"row":71,"column":21},"end":{"row":71,"column":22},"action":"remove","lines":["a"]}]}],[{"group":"doc","deltas":[{"start":{"row":71,"column":0},"end":{"row":71,"column":73},"action":"remove","lines":["error_log($e->getMessge(), 3, '/var/tmp/phperror.log'); //Write error log"]}]}],[{"group":"doc","deltas":[{"start":{"row":70,"column":26},"end":{"row":71,"column":0},"action":"remove","lines":["",""]}]}],[{"group":"doc","deltas":[{"start":{"row":73,"column":1},"end":{"row":73,"column":2},"action":"remove","lines":["/"]}]}],[{"group":"doc","deltas":[{"start":{"row":73,"column":0},"end":{"row":73,"column":1},"action":"remove","lines":["*"]}]}],[{"group":"doc","deltas":[{"start":{"row":72,"column":1},"end":{"row":73,"column":0},"action":"remove","lines":["",""]}]}],[{"group":"doc","deltas":[{"start":{"row":69,"column":0},"end":{"row":69,"column":46},"action":"remove","lines":["echo '{\"users\": ' . json_encode($users) . '}';"]}]}],[{"group":"doc","deltas":[{"start":{"row":68,"column":11},"end":{"row":69,"column":0},"action":"remove","lines":["",""]}]}],[{"group":"doc","deltas":[{"start":{"row":67,"column":0},"end":{"row":67,"column":41},"action":"remove","lines":["$users = $stmt->fetchAll(PDO::FETCH_OBJ);"]}]}],[{"group":"doc","deltas":[{"start":{"row":68,"column":11},"end":{"row":69,"column":0},"action":"insert","lines":["",""]}]}],[{"group":"doc","deltas":[{"start":{"row":69,"column":0},"end":{"row":70,"column":0},"action":"insert","lines":["echo true;",""]}]}],[{"group":"doc","deltas":[{"start":{"row":69,"column":10},"end":{"row":70,"column":0},"action":"remove","lines":["",""]}]}],[{"group":"doc","deltas":[{"start":{"row":67,"column":0},"end":{"row":68,"column":0},"action":"insert","lines":["$stmt->execute();",""]}]}],[{"group":"doc","deltas":[{"start":{"row":67,"column":17},"end":{"row":68,"column":0},"action":"remove","lines":["",""]}]}],[{"group":"doc","deltas":[{"start":{"row":19,"column":0},"end":{"row":19,"column":4},"action":"insert","lines":["    "]},{"start":{"row":20,"column":0},"end":{"row":20,"column":4},"action":"insert","lines":["    "]},{"start":{"row":21,"column":0},"end":{"row":21,"column":4},"action":"insert","lines":["    "]},{"start":{"row":22,"column":0},"end":{"row":22,"column":4},"action":"insert","lines":["    "]},{"start":{"row":23,"column":0},"end":{"row":23,"column":4},"action":"insert","lines":["    "]},{"start":{"row":24,"column":0},"end":{"row":24,"column":4},"action":"insert","lines":["    "]},{"start":{"row":25,"column":0},"end":{"row":25,"column":4},"action":"insert","lines":["    "]},{"start":{"row":26,"column":0},"end":{"row":26,"column":4},"action":"insert","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":27,"column":0},"end":{"row":27,"column":4},"action":"insert","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":24,"column":6},"end":{"row":25,"column":0},"action":"insert","lines":["",""]},{"start":{"row":25,"column":0},"end":{"row":25,"column":4},"action":"insert","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":26,"column":4},"end":{"row":26,"column":78},"action":"remove","lines":["error_log($e->getMessage(), 3, '/var/tmp/phperror.log'); //Write error log"]}]}],[{"group":"doc","deltas":[{"start":{"row":26,"column":0},"end":{"row":26,"column":4},"action":"remove","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":25,"column":28},"end":{"row":26,"column":0},"action":"remove","lines":["",""]}]}],[{"group":"doc","deltas":[{"start":{"row":25,"column":28},"end":{"row":25,"column":29},"action":"insert","lines":["q"]}]}],[{"group":"doc","deltas":[{"start":{"row":25,"column":29},"end":{"row":25,"column":30},"action":"insert","lines":["q"]}]}],[{"group":"doc","deltas":[{"start":{"row":25,"column":29},"end":{"row":25,"column":30},"action":"remove","lines":["q"]}]}],[{"group":"doc","deltas":[{"start":{"row":25,"column":28},"end":{"row":25,"column":29},"action":"remove","lines":["q"]}]}],[{"group":"doc","deltas":[{"start":{"row":17,"column":19},"end":{"row":17,"column":20},"action":"remove","lines":["_"]}]}],[{"group":"doc","deltas":[{"start":{"row":17,"column":18},"end":{"row":17,"column":19},"action":"remove","lines":["r"]}]}],[{"group":"doc","deltas":[{"start":{"row":17,"column":17},"end":{"row":17,"column":18},"action":"remove","lines":["e"]}]}],[{"group":"doc","deltas":[{"start":{"row":17,"column":16},"end":{"row":17,"column":17},"action":"remove","lines":["s"]}]}],[{"group":"doc","deltas":[{"start":{"row":17,"column":15},"end":{"row":17,"column":16},"action":"remove","lines":["u"]}]}],[{"group":"doc","deltas":[{"start":{"row":17,"column":15},"end":{"row":17,"column":16},"action":"remove","lines":["i"]}]}],[{"group":"doc","deltas":[{"start":{"row":17,"column":15},"end":{"row":17,"column":16},"action":"insert","lines":["I"]}]}],[{"group":"doc","deltas":[{"start":{"row":17,"column":22},"end":{"row":17,"column":23},"action":"remove","lines":["n"]}]}],[{"group":"doc","deltas":[{"start":{"row":17,"column":21},"end":{"row":17,"column":22},"action":"remove","lines":["r"]}]}],[{"group":"doc","deltas":[{"start":{"row":17,"column":20},"end":{"row":17,"column":21},"action":"remove","lines":["e"]}]}],[{"group":"doc","deltas":[{"start":{"row":17,"column":19},"end":{"row":17,"column":20},"action":"remove","lines":["s"]}]}],[{"group":"doc","deltas":[{"start":{"row":17,"column":18},"end":{"row":17,"column":19},"action":"remove","lines":["u"]}]}],[{"group":"doc","deltas":[{"start":{"row":17,"column":18},"end":{"row":17,"column":19},"action":"insert","lines":["F"]}]}],[{"group":"doc","deltas":[{"start":{"row":17,"column":19},"end":{"row":17,"column":20},"action":"insert","lines":["I"]}]}],[{"group":"doc","deltas":[{"start":{"row":17,"column":19},"end":{"row":17,"column":20},"action":"remove","lines":["I"]}]}],[{"group":"doc","deltas":[{"start":{"row":17,"column":19},"end":{"row":17,"column":20},"action":"insert","lines":["i"]}]}],[{"group":"doc","deltas":[{"start":{"row":17,"column":20},"end":{"row":17,"column":21},"action":"insert","lines":["r"]}]}],[{"group":"doc","deltas":[{"start":{"row":17,"column":21},"end":{"row":17,"column":22},"action":"insert","lines":["s"]}]}],[{"group":"doc","deltas":[{"start":{"row":17,"column":22},"end":{"row":17,"column":23},"action":"insert","lines":["t"]}]}],[{"group":"doc","deltas":[{"start":{"row":17,"column":23},"end":{"row":17,"column":24},"action":"insert","lines":["N"]}]}],[{"group":"doc","deltas":[{"start":{"row":17,"column":33},"end":{"row":17,"column":44},"action":"remove","lines":["profile_pic"]},{"start":{"row":17,"column":33},"end":{"row":17,"column":34},"action":"insert","lines":["L"]}]}],[{"group":"doc","deltas":[{"start":{"row":17,"column":34},"end":{"row":17,"column":35},"action":"insert","lines":["a"]}]}],[{"group":"doc","deltas":[{"start":{"row":17,"column":35},"end":{"row":17,"column":36},"action":"insert","lines":["s"]}]}],[{"group":"doc","deltas":[{"start":{"row":17,"column":36},"end":{"row":17,"column":37},"action":"insert","lines":["t"]}]}],[{"group":"doc","deltas":[{"start":{"row":17,"column":37},"end":{"row":17,"column":38},"action":"insert","lines":["N"]}]}],[{"group":"doc","deltas":[{"start":{"row":17,"column":38},"end":{"row":17,"column":39},"action":"insert","lines":["a"]}]}],[{"group":"doc","deltas":[{"start":{"row":17,"column":39},"end":{"row":17,"column":40},"action":"insert","lines":["m"]}]}],[{"group":"doc","deltas":[{"start":{"row":17,"column":40},"end":{"row":17,"column":41},"action":"insert","lines":["e"]}]}],[{"group":"doc","deltas":[{"start":{"row":17,"column":62},"end":{"row":17,"column":69},"action":"remove","lines":["user_id"]},{"start":{"row":17,"column":62},"end":{"row":17,"column":63},"action":"insert","lines":["I"]}]}],[{"group":"doc","deltas":[{"start":{"row":17,"column":63},"end":{"row":17,"column":64},"action":"insert","lines":["d"]}]}],[{"group":"doc","deltas":[{"start":{"row":16,"column":0},"end":{"row":29,"column":0},"action":"remove","lines":["function getUsers() {","$sql = \"SELECT Id,FirstName,name,LastName FROM users ORDER BY Id DESC\";","try {","    $db = getDB();","    $stmt = $db->query($sql); ","    $users = $stmt->fetchAll(PDO::FETCH_OBJ);","    $db = null;","    echo '{\"users\": ' . json_encode($users) . '}';","    } ","    catch(PDOException $e) {","    echo '{\"error\":{\"text\":'. $e->getMessage() .'}}';","    }","}",""]},{"start":{"row":16,"column":0},"end":{"row":28,"column":1},"action":"insert","lines":["function getUsers() {","$sql = \"select * FROM users\";","  try {","    $db = getConnection();","    $stmt = $db->query($sql);","    $users = $stmt->fetchAll(PDO::FETCH_OBJ);","    $db = null;","    echo json_encode($users);","  }","  catch(PDOException $e) {","    echo json_encode($e->getMessage());","  }","}"]}]}],[{"group":"doc","deltas":[{"start":{"row":28,"column":1},"end":{"row":29,"column":0},"action":"insert","lines":["",""]}]}],[{"group":"doc","deltas":[{"start":{"row":23,"column":9},"end":{"row":23,"column":10},"action":"insert","lines":["\""]}]}],[{"group":"doc","deltas":[{"start":{"row":23,"column":29},"end":{"row":23,"column":30},"action":"insert","lines":["\""]}]}],[{"group":"doc","deltas":[{"start":{"row":21,"column":18},"end":{"row":21,"column":43},"action":"remove","lines":["->fetchAll(PDO::FETCH_OBJ"]},{"start":{"row":21,"column":18},"end":{"row":21,"column":45},"action":"insert","lines":["->fetch_array(MYSQLI_ASSOC)"]}]}],[{"group":"doc","deltas":[{"start":{"row":21,"column":45},"end":{"row":21,"column":46},"action":"remove","lines":[")"]}]}],[{"group":"doc","deltas":[{"start":{"row":23,"column":9},"end":{"row":23,"column":10},"action":"remove","lines":["\""]}]}],[{"group":"doc","deltas":[{"start":{"row":23,"column":28},"end":{"row":23,"column":29},"action":"remove","lines":["\""]}]}],[{"group":"doc","deltas":[{"start":{"row":23,"column":28},"end":{"row":23,"column":29},"action":"insert","lines":["s"]}]}],[{"group":"doc","deltas":[{"start":{"row":23,"column":28},"end":{"row":23,"column":29},"action":"remove","lines":["s"]}]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":25,"column":26},"end":{"row":25,"column":26},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1426232170484,"hash":"609fee6e3750892a2ed840310b7b3083a6f8c380"}