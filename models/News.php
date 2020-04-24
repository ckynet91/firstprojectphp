<?php
/**
 *
 */
class News
{
	/**
	 *  Returns single news item with specified id
	 *  @param  integer $id
	 */
	public static function getNewsItemById($id)
	{
		$id = intval($id);

		if ($id) {

			$db = Db::getConnection();

			$result = $db->query('SELECT * from news WHERE id='. $id);
			$result->setFetchMode(PDO::FETCH_ASSOC); // Выводит только ассоциативный массив

			$newsItem = $result->fetch();


			return $newsItem;
		}


	}

	/**
	 * Returns array of news items
	 */
	public static function getNewsList(){


		$db = Db::getConnection();
		$newsList = [];

		$result = $db->query('SELECT id, title, date, shot_content
								FROM news
								ORDER BY date DESC
								LIMIT 10');

		$i = 0;
		while ($row = $result->fetch()) {
			$newsList[$i]['id'] = $row['id'];
			$newsList[$i]['title'] = $row['title'];
			$newsList[$i]['date'] = $row['date'];
			$newsList[$i]['shot_content'] = $row['shot_content'];
			$i++;
		}
		return $newsList;
	}
}