<<<<<<< HEAD
<?php 

    include getenv('DIR_MODELS') . '/Team.php';
    $teams = Team::GetAllTeam();

    $id = $_POST['id'] ?? null;
    $name = $_POST['name'] ?? null;
    $leader = $_POST['leader'] ?? null;
    $departmentID = $_POST['departmentID'] ?? null;

    $method = $_POST['method'] ?? null;

    if($method === 'add' && isset($name) && isset($leader) && isset($departmentID)){
        Add($name, $leader, $departmentID);
    }
    else if($method === 'edit' && isset($id) && isset($name) && isset($leader) && isset($departmentID)){
        Edit($id, $name, $leader, $departmentID);
    }
    else if($method === 'delete' && isset($id)){
        Delete($id);
    }
    else if($method === 'find'){
        $teamName = $_POST['team-name'];
        $teams = Find($teamName);
    }

    function Add($name, $leader, $departmentID){
        $team = new Team();
        $team->Add($name, $leader, $departmentID);
    }

    function Edit($id, $name, $leader, $departmentID){
        $team = new Team();
        $team->Edit($id, $name, $leader, $departmentID);
    }

    function Delete($id){
        $team = new Team();
        $team->Delete($id);
    }

    function Find($name){
        $team = new Team();
        return $team->Find($name);
    }
=======
<?php 

    include getenv('DIR_MODELS') . '/Team.php';
    $teams = [];

    $id = $_POST['id'] ?? null;
    $name = $_POST['name'] ?? null;
    $leader = $_POST['leader'] ?? null;
    $departmentID = $_POST['departmentID'] ?? null;

    $method = $_POST['method'] ?? null;

    if($method === 'add' && isset($name) && isset($leader) && isset($departmentID)){
        Add($name, $leader, $departmentID);
        $teams = Team::GetAllTeam();
    }
    else if($method === 'edit' && isset($id) && isset($name) && isset($leader) && isset($departmentID)){
        Edit($id, $name, $leader, $departmentID);
        $teams = Team::GetAllTeam();
    }
    else if($method === 'delete' && isset($id)){
        Delete($id);
        $teams = Team::GetAllTeam();
    }
    else if($method === 'find'){
        $teamName = $_POST['teamName'];
        $teams = Find($teamName);
    }
    else {
        $teams = Team::GetAllTeam();
    }

    function Add($name, $leader, $departmentID){
        $team = new Team();
        $team->Add($name, $leader, $departmentID);
    }

    function Edit($id, $name, $leader, $departmentID){
        $team = new Team();
        $team->Edit($id, $name, $leader, $departmentID);
    }

    function Delete($id){
        $team = new Team();
        $team->Delete($id);
    }

    function Find($name){
        $team = new Team();
        return $team->Find($name);
    }
>>>>>>> d45fdc2856ed37ffe9b365709a40cd9b2af68709
?>