<?php
    class RepeatCounter
    {
        function CountRepeats($keyword, $search_string)
        {
            $keyword_letters = str_split($keyword);
            $search_string_words = explode(" ", $search_string);
            $total_matches = 0;

            foreach ($search_string_words as $word_to_compare) {
                $word_letters = str_split($word_to_compare);
                if (array_diff($keyword_letters, $word_letters) === array()) {
                    ++$total_matches;
                }
            }
            return $total_matches;
        }

    }



 ?>
