<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/reports.php';

class ReportRepository extends Repository
{
    public function getReport(string $id): ?Report
    {
        $stmt = $this ->database ->connect() ->prepare(
            'SELECT * FROM public.reports WHERE id = :id');

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $reports = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($reports == false)
        {
            return null;

        }

        return new Report(
            $reports['title'],
            $reports['screenshot'],
            $reports['message']
        );
    }

    public function addReport(string $id): void
    {
        $date = new DateTime();
        $stmt = $this->database->connect()->prepare
        ('INSERT INTO reports (title, describtion, type, date, screenshot');
        VALUES (?, ?, ?, ?);
        ('INSERT INTO reports_screenshot(screenshot)');
        VALUES (?);

        $stmt->execute([
            $reports->getTitle(),
            $reports->getMessage(),
            $reports->getScreenshot(),
            $date-> format('Y-m-d'),
            $reports->getScreenshot()
        ])
    }

    public function getReports(): array
    {
        $result = [];

        $stmt = $this ->database->connect()->prepare
        (
            'SELECT * FROM reports'
        );

    }
}