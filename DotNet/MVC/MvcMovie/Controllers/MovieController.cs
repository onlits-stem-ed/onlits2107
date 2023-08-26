using Microsoft.AspNetCore.Mvc;
using MvcMovie.Data;
using MvcMovie.Models;

namespace MvcMovie.Controllers;

public class MovieController : Controller
{
    private MvcMovieContext _context;
    public MovieController(MvcMovieContext context)
    {
        _context = context;
    }
    public IActionResult Index()
    {
        List<Movie> movies = _context.Movies.ToList();
        return View(movies);
    }

    public IActionResult Create()
    {
        return View();
    }

    [HttpPost]
    public IActionResult Create(Movie movie)
    {
        _context.Movies.Add(new Movie
        {
            Title = movie.Title,
            ReleaseDate = movie.ReleaseDate,
            Genre = movie.Genre,
            Price = movie.Price
        });
        _context.SaveChanges();

        List<Movie> movies = _context.Movies.ToList();
        return View("Index", movies);
    }

    public IActionResult Details(int id)
    {
        Movie movie = _context.Movies.Find(id);
        return View(movie);
    }

    public IActionResult Edit(int Id)
    {
        Movie movie = _context.Movies.Find(Id);
        return View(movie);
    }

    [HttpPost]
    public IActionResult Edit(int Id, Movie movie)
    {
        Movie _movie = _context.Movies.Find(Id);
        _movie.Title = movie.Title;
        _movie.ReleaseDate = movie.ReleaseDate;
        _movie.Genre = movie.Genre;
        _movie.Price = movie.Price;
        _context.SaveChanges();
        List<Movie> movies = _context.Movies.ToList();
        return View("Index", movies);
    }

    public IActionResult Delete(int Id)
    {
        Movie _movie = _context.Movies.Find(Id);
        _context.Movies.Remove(_movie);
        _context.SaveChanges();
        List<Movie> movies = _context.Movies.ToList();
        return View("Index", movies);
    }
}