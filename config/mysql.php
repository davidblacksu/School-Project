<?php
    function sqlcmd_selectStudent(int $id) : string {
        return "SELECT * FROM student where id = $id;";
    }
    function sqlcmd_showClassByGender(): string {
        return "select grade , class , gender , count(*) from school.student group by grade , class , gender;";
    }
    function sqlcmd_showClassStudent( int $grade , string $class ): string {
        return "SELECT grade , class , id , name , gender FROM student where grade = $grade and class = '$class';";
    }
?>