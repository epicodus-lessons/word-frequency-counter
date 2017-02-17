<?php
    class RepeatCounter
    {
        function CountRepeats($keyword, $search_string)
        {
            $keyword_lowerc = strtolower($keyword);
            $keyword_letters = str_split($keyword_lowerc);
            $special_characters = array(",", ".", "!", "?", "'s", "(", ")");
            $clean_search_string = str_replace($special_characters, "", $search_string);
            $lowerc_search_string = strtolower($clean_search_string);
            $search_string_words = explode(" ", $lowerc_search_string);
            $total_matches = 0;

            foreach ($search_string_words as $word_to_compare) {
                $word_letters = str_split($word_to_compare);
                if (array_diff($keyword_letters, $word_letters) === array() && strlen($word_to_compare) === strlen($keyword)) {
                    ++$total_matches;
                }
            }
            return $total_matches;
        }

    }



 ?>
