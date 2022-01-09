<?php
    require_once 'src/config/database.php';

    class Blood {
        public $id;
        public $name;

        public function connectDb() {
            $connection = mysqli_connect(DB_HOST,
                DB_USERNAME, DB_PASSWORD, DB_NAME);
            if (!$connection) {
                die("Không thể kết nối. Lỗi: " .mysqli_connect_error());
            }
    
            return $connection;
        }

        public function insert($blood = []) {
            $connection = $this->connectDb();
            //tạo và thực thi truy vấn
            $queryInsert = "INSERT INTO db_duan(`tenduan`, `namthuchien`, `linhvuc`, nhiemvu, coquanthuchien) 
            VALUES ('{$blood['name']}', '{$blood['date']}', '{$blood['lv']}', 
            '{$blood['nv']}', '{$blood['cq']}')";
            $isInsert = mysqli_query($connection, $queryInsert);
            $this->closeDb($connection);

            return $isInsert;
        }

        public function indexABC() {
            $connection = $this->connectDb();
            //truy vấn
            $querySelect = "SELECT * FROM db_duan";
            $results = mysqli_query($connection, $querySelect);
            $bloods = [];
            if (mysqli_num_rows($results) > 0) {
                $bloods = mysqli_fetch_all($results, MYSQLI_ASSOC);
            }

            $this->closeDb($connection);
    
            return $bloods;
        }

        public function closeDb($connection = null) {
            mysqli_close($connection);
        }

        public function getBloodById($id = null) {
            $connection = $this->connectDb();
            $querySelect = "SELECT * FROM db_duan WHERE maduan=$id";
            $results = mysqli_query($connection, $querySelect);
            $blood = [];
            if (mysqli_num_rows($results) > 0) {
                $bloods = mysqli_fetch_all($results, MYSQLI_ASSOC);
                $blood = $bloods[0];
            }
            $this->closeDb($connection);
    
            return $blood;
        }

        public function update($blood) {
          
            $connection = $this->connectDb();
            $queryUpdate = "UPDATE db_duan SET `tenduan` = '{$blood['name']}', `namthuchien` = '{$blood['date']}',  `linhvuc` = '{$blood['lv']}'
            ,  `nhiemvu` = '{$blood['nv']}',  `coquanthuchien` = '{$blood['cq']}'  WHERE `maduan` = {$blood['id']} ";
            $isUpdate = mysqli_query($connection, $queryUpdate);
            $this->closeDb($connection);
    
            return $isUpdate;
        }

        public function delete($id = null) {
            $connection = $this->connectDb();
    
            $queryDelete = "DELETE FROM db_duan WHERE maduan = $id";
            $isDelete = mysqli_query($connection, $queryDelete);
    
            $this->closeDb($connection);
    
            return $isDelete;
        }
    }
 ?>