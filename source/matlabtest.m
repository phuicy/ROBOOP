%
%
clear
%
a = transl([1;2;3]);
b = rotx(pi/6);
c = roty(pi/6);
d = rotz(pi/6);
e = rpy2tr([3;2;1]);
f = rotvec([1;2;3],pi/2);

q_ = quaternion([0 0 1], pi/4);
g  = q_.r;
q_ = quaternion([pi/4, pi/6, pi/8, 1]);
qu_= unit(q_);
h  = qu_.r;    % Rotation Matrix from quaternion
i  = qu_.t;    % Transformation "            "
q_ = quaternion(h);
j  = [q_.s q_.v];
q_ = quaternion(i);
k  = [q_.s q_.v];

% -------------- R O B O T -----------------

clear q_;
q_   = [pi/4 pi/4 pi/4 pi/4 pi/4 pi/4];
qd_  = q_;
qdd_ = q_;
run puma560_no_motor;
l = fkine(p560, q_);
m = jacob0(p560, q_);
n = jacobn(p560, q_);
o = rne_dh(p560, q_, qd_, qdd_);
p = inertia(p560, q_);
clear p560;
run puma560_motor;
q = rne_dh(p560, q_, qd_, qdd_);

run stanford_no_motor;
r = fkine(stanf, q_);
s = jacob0(stanf, q_);
t = jacobn(stanf, q_);
u = rne_dh(stanf, q_, qd_, qdd_);
g_ = [0;0;9.81];
f_ = [10;5;7;11;22;33];
v = rne_dh(stanf, q_, qd_, qdd_, g_, f_);
w = inertia(stanf, q_);

run puma560akb_no_motor;
x = fkine(p560m, q_);
y = jacob0(p560m, q_);
z = jacobn(p560m, q_);
aa = rne_mdh(p560m, q_, qd_, qdd_);
bb= inertia(p560m, q_);
clear p560m;
run puma560akb_motor;
cc = rne_mdh(p560m, q_, qd_, qdd_);
dd = rne_mdh(p560m, q_, qd_, qdd_, g_, f_);

save ../source/test.txt -ascii -double a b c d e f g h i j k l m n o p q r s t u v w x y z aa bb cc dd
