export default function handler(req, res) {
  // Get the `id` parameter from the query
  const { id } = req.query;

  if (!id) {
    // If no id is provided, respond with a 400 Bad Request
    return res.status(400).json({ error: 'Missing id parameter' });
  }

  // Build the redirection URL
  const redirectUrl = `https://my.rspublication.com/roxhd.php?id=${id}`;

  // Redirect the user to the URL
  res.writeHead(302, { Location: redirectUrl });
  res.end();
}
