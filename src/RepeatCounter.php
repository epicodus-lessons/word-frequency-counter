<?php
    class RepeatCounter
    {
        function CountRepeats($keyword, $search_string)
        {
            $keyword_letters = str_split($keyword);
            $search_string_letters = str_split($search_string);
            if (array_diff($keyword_letters, $search_string_letters) === array()) {
                return 1;
            } else {
                return 0;
            }
        }

    }



 ?>
