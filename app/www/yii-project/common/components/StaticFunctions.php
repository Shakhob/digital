<?php


namespace common\components;

use Yii;
use yii\db\Query;
use yii\helpers\FileHelper;

class StaticFunctions
{
    public static function saveImage($image,$modelType,$modelId){
        $fileName = "photo" . md5($image->baseName . time() . rand(1,100000));
        $fileName .= "." . $image->extension;
        $dir = Yii::getAlias("@frontend") . "/web/uploads/{$modelType}/{$modelId}/";
        if(!is_dir($dir)){
            FileHelper::createDirectory($dir);
        }
        if($image->saveAs($dir.$fileName)){
            return$fileName;
        }
    }
    public static function getImage($imageName,$modelType,$modelId){
        $file = Yii::getAlias("@frontend") . "/web/uploads/{$modelType}/{$modelId}/{$imageName}";
        if (is_file($file)) {
            if (pathinfo($file, PATHINFO_EXTENSION) === 'svg') {
                // Если формат файла SVG, возвращаем его содержимое
                return file_get_contents($file);
            } else {
                // Для других форматов возвращаем тег img
                $imageUrl = Yii::$app->params['frontend'] . "/uploads/{$modelType}/{$modelId}/{$imageName}";
            }
        }
        $no_photo = Yii::$app->params['frontend'] . "/images/no_photo.png";
        return "<img class='preview' src='{$no_photo}' alt='no photo' style='max-width: 100%; height: 200px'>";
    }
    public static function deleteImage($imageName, $modelType, $modelId)
    {
        $file = Yii::getAlias("@frontend") . "/web/uploads/{$modelType}/{$modelId}/{$imageName}";

        if (is_file($file)) {
            unlink($file);
        }

        $folder = Yii::getAlias("@frontend") . "/web/uploads/{$modelType}/{$modelId}";

        if (is_dir($folder)) {
            FileHelper::removeDirectory($folder);
        }
    }

    public static function getTableCounts($tableName)
    {
        $query = (new Query())
            ->from($tableName)
            ->count();

        return $query;
    }


    public static function debug($arr)
    {
        echo "<pre>" . print_r($arr, true) . "</pre>";
    }

    public static function formatPublishedDate($publishedDate)
    {
        $months = Yii::$app->params['months'];
        $englishMonth = Yii::$app->formatter->asDatetime($publishedDate, 'php:F');
        $russianMonth = isset($months[date('n', strtotime($publishedDate))]) ? $months[date('n', strtotime($publishedDate))] : $englishMonth;
        $formattedDate = Yii::$app->formatter->asDatetime($publishedDate, "php:d {$russianMonth} Y");
        $formattedDate = preg_replace('/(?<=\d)(st|nd|rd|th)\b/', '', $formattedDate);
        return $formattedDate;
    }
    public static function saveFile($file, $modelType, $modelId)
    {
        $fileName = "file" . md5($file->baseName . time() . rand(1, 100000));
        $fileName .= "." . $file->extension;
        $dir = Yii::getAlias("@frontend") . "/web/uploads/{$modelType}/{$modelId}/";
        if (!is_dir($dir)) {
            FileHelper::createDirectory($dir);
        }
        if ($file->saveAs($dir . $fileName)) {
            return $fileName;
        }
    }

    public static function getFile($fileName, $modelType, $modelId)
    {
        $filePath = Yii::$app->params['frontend'] . "/uploads/{$modelType}/{$modelId}/{$fileName}";

        if ($fileName) {
            // Возвращаем полный путь к файлу
            return $filePath;
        }
        // В случае отсутствия файла, можно вернуть какой-то стандартный результат или null
        return null;
    }

    public static function deleteFile($fileName, $modelType, $modelId)
    {
        $filePath = Yii::getAlias("@frontend") . "/web/uploads/{$modelType}/{$modelId}/{$fileName}";

        if (is_file($filePath)) {
            unlink($filePath);
        }

        // Можно также удалить пустую директорию, если она осталась после удаления файла
        $folder = Yii::getAlias("@frontend") . "/web/uploads/{$modelType}/{$modelId}";
        if (is_dir($folder) && count(scandir($folder)) == 2) {
            // Директория пуста (кроме . и ..), можно удалить
            FileHelper::removeDirectory($folder);
        }
    }
}
