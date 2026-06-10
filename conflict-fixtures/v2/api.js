import express from "express";
import rateLimit from "express-rate-limit";

const router = express.Router();

const limiter = rateLimit({ windowMs: 60_000, max: 30 });

router.post("/users", limiter, async (req, res) => {
  const { name, email, phone } = req.body;

  const user = await userService.createUser({ name, email, phone });

  res.status(201).json({
    success: true,
    data: user,
    meta: { version: "v2" },
  });
});

router.get("/users/:id", limiter, async (req, res) => {
  const user = await userService.findById(req.params.id);

  if (!user) {
    return res.status(404).json({ success: false, error: "User not found" });
  }

  res.json({ success: true, data: user, meta: { version: "v2" } });
});

export default router;
