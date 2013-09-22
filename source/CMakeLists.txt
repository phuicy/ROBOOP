# CMake configuration file roboop source dir
# 

project(roboop)
add_library(roboop
  gnugraph.cpp
  comp_dq.cpp
  comp_dqp.cpp
  delta_t.cpp
  dynamics.cpp
  homogen.cpp
  kinemat.cpp
  robot.cpp
  sensitiv.cpp
  utils.cpp
  quaternion.cpp
  config.cpp
  trajectory.cpp
  clik.cpp
  controller.cpp
  invkine.cpp
  control_select.cpp
  dynamics_sim.cpp
  stewart.cpp)
set(DEMO_PROGS rtest demo bench demo_2dof_pd)
foreach(demo_prog ${DEMO_PROGS})
  add_executable(${demo_prog} ${demo_prog}.cpp)
  target_link_libraries(${demo_prog} roboop newmat)
endforeach(demo_prog)

