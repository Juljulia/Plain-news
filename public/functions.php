<?php

declare(strict_types=1);

/**
 * Compare the dates
 *
 * @param array $a
 * @param array $b
 * @return integer
 */
    function compareDates(array $a, array $b) : int {
      return strtotime($b['publishedDate']) - strtotime($a['publishedDate']);
  }

/**
 * Gets authors name by comparing authors id and articles author id
 *
 * @param integer $searchId
 * @param array $authors
 * @return string
 */
  function getName(int $searchId, array $authors): string {
    foreach ($authors as $author) {
            $id = $author ['id'];
                if ($id == $searchId) {
                    return $author ['name'];
                }
    }
};

