import express from "express";
import { authenticate } from "./middleware/auth.js";

const router = express.Router();

router.post("/users", authenticate, async (req, res) => {
  const { name, email } = req.body;

  const user = await userService.createUser({ name, email });

  res.json({
    ok: true,
    user,
  });
});

router.get("/users/:id", authenticate, async (req, res) => {
  const user = await userService.findById(req.params.id);

  if (!user) {
    return res.status(404).json({ ok: false, message: "User not found" });
  }

  res.json({ ok: true, user });
});

export default router;
