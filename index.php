<?php
class Movies
{
    public $title;
    public $release_date;
    public $mins_duration;
    public $director;
    public $min_age;
    public $warning;

    function __construct($_title, $_release_date, $_min_age, $_director)
    {
        $this->title = $_title;
        $this->release_date = $_release_date;
        $this->min_age = $_min_age;
        $this->director = $_director;

        if ($this->min_age === 18) {
            $this->warning = 'Red';
        } elseif ($this->min_age === 14) {
            $this->warning = 'Orange';
        } else {
            $this->warning = 'Green';
        }
    }

    public function getFilmDescription()
    {
        return "$this->title | release date: $this->release_date | director: $this->director | warning: $this->warning";
    }

    public function getFilmDescriptionArray()
    {
        return [
            "Title" => $this->title,
            "Release" => $this->release_date,
            "Director" => $this->director,
            "Duration" => $this->mins_duration,
            "Warning" => $this->warning
        ];
    }
}

$inception = new Movies("Inception", 2010, 14, "Christopher Nolan");
$inception->mins_duration = 148 . " minutes";

$tenet = new Movies("Tenet", 2020, 13, "Christopher Nolan");
$tenet->mins_duration = 150 . " minutes";

$shutter_island = new Movies("Shutter Island", 2010, 14, "Martin Scorsese");
$shutter_island->mins_duration = 138 . " minutes";

$the_irish_man = new Movies("The Irish Man", 2019, "Visione consentita a tutti", "Martin Scorsese");
$the_irish_man->mins_duration = 186 . " minutes";

?>
<div style="display:flex; justify-content: space-between;">

    <div>
        <?php foreach ($inception->getFilmDescriptionArray() as $key => $info) { ?>
            <h2> <?php echo "$key: $info"; ?> </h2>
        <?php } ?>
    </div>

    <div>
        <?php foreach ($tenet->getFilmDescriptionArray() as $key => $info) { ?>
            <h2> <?php echo "$key: $info"; ?> </h2>
        <?php } ?>
    </div>

    <div>
        <?php foreach ($shutter_island->getFilmDescriptionArray() as $key => $info) { ?>
            <h2> <?php echo "$key: $info"; ?> </h2>
        <?php } ?>
    </div>

    <div>
        <?php foreach ($the_irish_man->getFilmDescriptionArray() as $key => $info) { ?>
            <h2> <?php echo "$key: $info"; ?> </h2>
        <?php } ?>
    </div>
</div>