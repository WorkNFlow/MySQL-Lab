<?php

class Student
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function add($name, $ticketQuantity, $film, $is3d, $seatType)
    {
        $stmt = $this->pdo->prepare(
            'INSERT INTO students (name, ticket_quantity, film, is_3d, seat_type) VALUES (?, ?, ?, ?, ?)'
        );
        $stmt->execute([$name, $ticketQuantity, $film, $is3d, $seatType]);
    }

    public function getAll()
    {
        $stmt = $this->pdo->query('SELECT * FROM students');
        return $stmt->fetchAll();
    }

    public function update($id, $name)
    {
        $stmt = $this->pdo->prepare('UPDATE students SET name = ? WHERE id = ?');
        $stmt->execute([$name, $id]);
    }

    public function delete($id)
    {
        $stmt = $this->pdo->prepare('DELETE FROM students WHERE id = ?');
        $stmt->execute([$id]);
    }
}

